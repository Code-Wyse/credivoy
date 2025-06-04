<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Hotel;
use App\Models\RoomType;
use App\Models\Destination;
use App\Models\Testimonial;
use App\Models\HotelCategory;
use Illuminate\Support\Facades\Auth;



class HotelController extends Controller
{
    public function index()
    {
        $data['hotels'] = Hotel::withCount('hotelBookings')
             ->limit(5)
             ->get();
        $data['testimonials'] = Testimonial::with('picture')->limit(10)->get();
        $data['recentBlogs'] = Blog::orderBy('created_at','desc')->limit(5)->get();
        $data['allDestinations'] = Destination::get();
        return view('hotels',$data);
    }

    public function list(){
        $data['categories'] = HotelCategory::get();
        $data['hotels'] = Hotel::byQuery(request()->get('query'))
            ->byDates(request()->get('check_in_date'),request()->get('check_out_date'))
            ->byMinPrice(request()->get('min_price'))
            ->byMaxPrice(request()->get('max_price'))
            ->byRating(request()->get('rating'))
            ->byCategoryId(request()->get('category_id'))
            ->get();
        $data['hotel_min_price'] = RoomType::orderBy('price_per_night','asc')->first()->price_per_night;
        $data['hotel_max_price'] = RoomType::orderBy('price_per_night','desc')->first()->price_per_night;
        return view('hotels_list',$data);
    }

    public function show($id)
    {
        $hotel = Hotel::where('hotels.id', '=', $id)->firstOrFail();
        $user = Auth::user(); // Retrieve the authenticated user
    
        return view('hotel_details', compact('hotel', 'user'));
    }

}
