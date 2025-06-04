<?php

namespace App\Http\Controllers;

use App\Helpers\ApiRes;
use App\Models\AgeCategory;
use App\Models\Category;
use App\Models\Destination;
use App\Models\Faq;
use App\Models\Tour;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\TourComment;
use Illuminate\Support\Facades\Auth;


class TourController extends Controller
{
    public function index(Request $request){

        if($request->ajax()) {
            $toursQuery = Tour::query();
            $toursQuery->with(['media']);
            if (request()->get('tour_date')) {
                $tourDate = request()->get('tour_date');
                $toursQuery->whereHas('departures', function ($q) use ($tourDate) {
                    $tourDay = explode("-", $tourDate)[1];
                    $tourMonth = explode("-", $tourDate)[0];
                    $filterString = date('Y') . '-' . $tourMonth . '-' . $tourDay;
                    $q->whereDate('departure_date', $filterString);
                });
            }
            if (request()->get('date_range')) {
                $dateRange = request()->get('date_range');
                $dateRangeArray = explode(" to ", $dateRange);
                $toursQuery->whereHas('departures', function ($q) use ($dateRangeArray) {
                    $from_date = $dateRangeArray[0];
                    $to_date = $dateRangeArray[1];
                    $q->whereBetween('departure_date', [$from_date, $to_date]);
                });
            }
            if (request()->get('price_range')) {
                $fromPrice = explode("_",$request->price_range)[0];
                $toPrice = explode("_",$request->price_range)[1];
                $toursQuery->where('price', '>=', $fromPrice);
                $toursQuery->where('price', '<=', $toPrice);
            }

            if (request()->get('duration')) {
                $durations = explode(',', $request->duration);

                $toursQuery->where(function($toursQuery) use ($durations) {
                    foreach ($durations as $key => $dur) {
                        $toursQuery->orWhere(function($query) use ($dur) {
                            $ex = explode('-', $dur);
                            $min = $ex[0];
                            $max = $ex[1];
                            $query->where('duration', '>=', $min)
                                ->where('duration', '<=', $max);
                        });
                    }
                });

            }
            if (request()->get('age')) {
                $toursQuery->where('age', '>=', request()->get('age'));
            }
            if (request()->get('specials')) {
                foreach (request()->get('specials') as $special) {
                    if ($special == 'featured') {
                        $toursQuery->where('is_featured', '=', 1);
                    } else if ($special == 'discounted') {
                        $toursQuery->whereNotNull('original_price');
                    }
                }
            }

            if (request()->get("destination")) {
                $destinationId = request()->get("destination");
                $toursQuery->whereHas("destinations", function ($query) use ($destinationId) {
                    $query
                        ->where('destinations.name','like','%'.$destinationId.'%')
                        ->orWhere('destinations.id', $destinationId);
                });
            }

            if (request()->get("destination_title")) {
                $destinationTitle = request()->get("destination_title");
                $toursQuery->whereHas("destinations", function ($query) use ($destinationTitle) {
                    $query->where('destinations.name', 'like', '%' . $destinationTitle . '%');
                });
            }
            if (request()->get("category_title")) {
                $categoryTitle = request()->get("category_title");
                $toursQuery->whereHas("categories", function ($query) use ($categoryTitle) {
                    $query->where('categories.name', 'like', '%' . $categoryTitle . '%');
                });
            }
            if (request()->get("categories")) {
                $categories = request()->get("categories");
                $categories = array_map('trim',explode(',',$categories));
                $toursQuery->whereHas("categories", function ($query) use ($categories) {
                    $query->whereIn('categories.id', $categories);
                });
            }

            if(request()->has('domestic')){
                $toursQuery->where('domestic','=',request()->get('domestic'));
            }

            $data['tours'] = $toursQuery->paginate(20);



            return ApiRes::success("Tours fetched successfully",200,$data);

        }

        $priceMin = 2000;
        $priceMax =  80000;
        $durations = [];
        $categories = [];
        if($request->has("price_range")){
            $exp = explode('_',$request->price_range);
            $priceMin = $exp[0];
            $priceMax = $exp[1];
        }
        if($request->has('duration')){
            $durations =  explode(",",$request->duration);
        }
        if($request->has('categories')){
            $categories =  explode(",",$request->categories);
        }

        $allDestinations = Destination::get();
        $allCategories = Category::get();

        return view('front.tours.index',compact('priceMin','priceMax','durations','categories','allDestinations','allCategories'));
    }

    public function show($slug){
        $user = Auth::user();
        $singleTour = Tour::with(['media','itineraries','categories','destinations'])->where('slug',$slug)->firstOrFail();
        $data['tour'] = $singleTour;
        $data['faqs'] = Faq::get();
        $data['similar_tours'] = [];
        $data['slug'] = $slug;
        $data['age_categories'] = AgeCategory::get();
        $comments = TourComment::where('tour_id', $singleTour->id)->with('user')->get();
        $data['comments'] = $comments;
//        $data['similar_tours'] = Tour::whereHas('destinations',function($q) use ($singleTour) {
//            $q->where('destination_id',$singleTour->)
//        });
//        $data['similar_tours'] = Tour::where('destination_id',$data['tour']->destination_id)->where('id','!=',$data['tour']->id)->limit(3)->get();
//        if(count($data['similar_tours']) < 3){
//            $getMoreCount = 3 - count($data['similar_tours']);
//            $otherSimilarTours = Tour::where('category_id',$data['tour']->category_id)->where('id','!=',$data['tour']->id)->limit($getMoreCount)->get();
//            $data['similar_tours'] = $data['similar_tours']->merge($otherSimilarTours);
//        }

        // dd($data['similar_tours'][0]->media->isEmpty());

        return view('front.tours.show',array_merge($data, ['user' => $user]));
    }


    public function addReview($slug){

        return $slug;
//        $request->validate([
//            'tour_id' => Tour::where("slug",$request->slug)->first()->id,
//            'rating' => $request->rating,
//            'title' => $request->title,
//            'review' => $request->review,
//        ]);

//        return veiw("add")

    }
}
