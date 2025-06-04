<?php

namespace App\Http\Controllers\Admin;

use App\Models\Vehicle;
use App\Models\VehicleBooking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;


class VehicleBookingController extends Controller
{
    public function create($vehicleId)
    {
        $vehicle = Vehicle::findOrFail($vehicleId);
        return view('admin.vehicle_bookings.create', compact('vehicle'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'vehicle_id' => 'required|exists:vehicles,id',
            'from_date' => 'required|date|after_or_equal:today',
            'to_date' => 'required|date|after_or_equal:from_date',
        ]);

        $vehicle = Vehicle::findOrFail($request->vehicle_id);
        $fromDate = \Carbon\Carbon::parse($request->from_date);
        $toDate = \Carbon\Carbon::parse($request->to_date);
        $days = $toDate->diffInDays($fromDate);
        $totalAmount = $days * $vehicle->price_per_day;

        VehicleBooking::create([
            'vehicle_id' => $request->vehicle_id,
            'user_id' => Auth::id(),
            'from_date' => $request->from_date,
            'to_date' => $request->to_date,
            'total_amount' => $totalAmount,
        ]);

        return redirect()->route('admin.vehicle_bookings.index')->with('success', 'Booking confirmed successfully!');
    }

    public function index()
    {
        $bookings = VehicleBooking::with('vehicle', 'user')->get();
        return view('admin.vehicle_bookings.index', compact('bookings'));
    }
}
