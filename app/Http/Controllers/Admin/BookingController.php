<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class BookingController extends Controller
{
    public function index(){
        $data['bookings'] = Booking::with(['user','tour'])->get();
        return view('admin.bookings.index',$data);
    }

    public function edit(Booking $booking){
        $data['booking'] = $booking;
        return view('admin.bookings.edit',$data);
    }

    public function update(Request $request,Booking $booking){
        $validated = $request->validate([
            'payment_status' => 'required|in:pending,confirmed,advance_deposited',
            'advance_deposit_amount' => [Rule::requiredIf($request->payment_status === 'advance_deposited'),'numeric']
        ]);

        if($validated['payment_status'] === 'advance_deposited'){
            $booking->payments()->create([
                'payment_type' => 'advance_deposited',
                'amount' => $validated['advance_deposit_amount']
            ]);
        }

        $booking->update(['payment_status' => $validated['payment_status']]);

        session()->flash('success','Booking Status Updated!');
        return redirect(route('admin.bookings.index'));
    }

}
