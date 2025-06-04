<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\TourDeparture;
use Illuminate\Http\Request;

class TourDepartureController extends Controller
{
    public function index($tourId){
        $data['departures'] = TourDeparture::where(['tour_id' => $tourId])->get();
        return view('admin.tours.departures.index',$data);
    }

    public function create($tourId){
        $data['tour_id'] = $tourId;
        return view('admin.tours.departures.create',$data);
    }

    public function store(Request $request, $tourId){
        $request->validate([
            'departure_date' => 'required|date'
        ]);
        TourDeparture::create([
            'departure_date' => $request->departure_date,
            'tour_id' => $tourId
        ]);
        session()->flash('success','Tour Departure Added!');
        return redirect(route('admin.tours.index'));
    }

    public function destroy($tourId,$id){
        TourDeparture::where(['tour_id' => $tourId])->findOrFail($id)->delete();
        session()->flash('success','Tour Departed Deleted!');
        return redirect(route('admin.tours.index'));
    }
}
