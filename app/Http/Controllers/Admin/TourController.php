<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Destination;
use App\Models\Media;
use App\Models\Tour;
use App\Models\TourCategory;
use App\Models\TourDestination;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class TourController extends Controller
{
    public function index(){
        $data['tours'] = Tour::get();
        return view('admin.tours.index',$data);
    }

    public function create(){
        $data['categories'] = Category::get();
        $data['destinations'] = Destination::get();
        return view('admin.tours.create',$data);
    }

    public function store(Request $request){
        $request->validate([
            'category_ids' => 'required|array',
            'category_ids.*' => 'exists:categories,id',
            'destination_ids' => 'required|array',
            'destination_ids.*' => 'exists:destinations,id',
            'title' => 'required',
            'overview' => 'required',
            'duration' => 'required',
            'group_size' => 'required',
            'age' => 'required',
            'location' => 'required',
            'location_link' => 'required|url',
            'price' => 'required',
            'child_price' => 'nullable',
            'original_price' => 'nullable',
            'inclusion' => 'required',
            'is_featured' => 'required|bool',
            'media' => 'required|file|image',
            'domestic' => 'nullable'
        ]);
        $tourData = $request->except(['_token','category_ids','destination_ids','media']);
        $tourData['slug'] = Str::slug($request->title);
        if(!isset($tourData['domestic'])) {
            $tourData['domestic'] = 0;
        }
        $tour = Tour::create($tourData);
        foreach ($request->category_ids as $category_id) {
            TourCategory::create([
                'tour_id' => $tour->id,
                'category_id' => $category_id
            ]);
        }
        foreach ($request->destination_ids as $destination_id) {
            TourDestination::create([
                'tour_id' => $tour->id,
                'destination_id' => $destination_id
            ]);
        }
        $fileName = time().'_'.$request->file('media')->getClientOriginalName();
        $request->file('media')->move(public_path('uploaded_data'),$fileName);
        Media::create([
            'media_of_type' => Tour::class,
            'media_of_id' => $tour->id,
            'mime' => $request->file('media')->getClientMimeType(),
            'media_file' => '/uploaded_data/'.$fileName,
        ]);
        
        session()->flash('success','Tour Created!');
        return redirect(route('admin.tours.index'));
    }

    public function show(Tour $tour){
        $data['tour'] = $tour;
        return view('admin.tours.show',$data);
    }

    public function edit(Tour $tour){
        $data['destinations'] = Destination::get();
        $data['categories'] = Category::get();
        $data['tour'] = $tour;
        return view('admin.tours.edit',$data);
    }

    public function update(Request $request, Tour $tour){
        $request->validate([
            'category_ids' => 'required|array',
            'category_ids.*' => 'exists:categories,id',
            'destination_ids' => 'required|array',
            'destination_ids.*' => 'exists:destinations,id',
            'title' => 'required',
            'overview' => 'required',
            'duration' => 'required',
            'group_size' => 'required',
            'age' => 'required',
            'location' => 'required',
            'location_link' => 'required|url',
            'price' => 'required',
            'child_price' => 'nullable',
            'original_price' => 'nullable',
            'inclusion' => 'required',
            'is_featured' => 'required|bool',
            'domestic' => 'nullable'
        ]);
        $tourData = $request->except(['_token','category_ids','destination_ids']);
        $tourData['slug'] = Str::slug($request->title);
        $tour->update($tourData);
        foreach ($request->category_ids as $category_id) {
            TourCategory::updateOrCreate([
                'tour_id' => $tour->id,
                'category_id' => $category_id
            ],[]);
        }
        foreach ($request->destination_ids as $destination_id) {
            TourDestination::updateOrCreate([
                'tour_id' => $tour->id,
                'destination_id' => $destination_id
            ],[]);
        }
        session()->flash('success','Tour Updated!');
        return redirect(route('admin.tours.index'));
    }

    public function destroy(Tour $tour){
        $tour->delete();
        session()->flash('success','Tour Deleted!');
        return redirect(route('admin.tours.index'));
    }
}
