<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Itinerary;
use App\Models\Tour;
use Illuminate\Http\Request;

class TourItinearyController extends Controller
{
    public function index(Tour $tour){
        $data['itinearies'] = $tour->itineraries;
        $data['tour_id'] = $tour->id;
        return view('admin.tours.iternaries.index',$data);
    }

    public function create($tourId){
        $data['tour_id'] = $tourId;
        return view('admin.tours.iternaries.create',$data);
    }

    public function store(Request $request, Tour $tour){
        $validated = $request->validate([
            'day' => 'required',
            'title' => 'required',
            'description' => 'required'
        ]);
        $tour->itineraries()->create($validated);
        return redirect(route('admin.tours.index'));
    }

    public function destroy(Tour $tour, Itinerary $itinerary){
        $itinerary->delete();
        return redirect(route('admin.tours.index'));
    }
}
