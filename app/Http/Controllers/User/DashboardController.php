<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\Payment;
use Illuminate\Http\Request;
use App\Models\HotelBooking;
use Illuminate\Support\Collection;

class DashboardController extends Controller
{
    //
    public function dashboard(){
        $userId = auth()->id();
        $data['cash_payments'] = Payment::whereHas('paymentable',function($q) use ($userId) {
            $q->where('user_id',$userId);
        })->where('payment_method','cash')->count();
        $data['online_payments'] = Payment::whereHas('paymentable',function($q) use ($userId) {
            $q->where('user_id',$userId);
        })->where('payment_method','online')->count();
        return view("user.dashboard",$data);
    }

    public function orders()
    {
        $userId = auth()->id();

        // Retrieve hotel bookings
        $hotelBookings = HotelBooking::where('user_id', $userId)->with('hotel')->get();

        // Retrieve tour bookings
        $tourBookings = Booking::where('user_id', $userId)->with('tour')->get();

        // Combine the collections
        $bookings = $hotelBookings->merge($tourBookings);

        // Pass the combined bookings to the view
        return view("user.orders", ['bookings' => $bookings]);
    }


    public function singleOrder($id){
        $data['booking'] = Booking::where(['user_id' => auth()->id()])->findOrFail($id);
        return view('booking-details',$data);
    }

    public function accountDetails(){
        return view("user.accounts-details");
    }

    public function updateAccountDetails(Request $request){
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'cnic' => 'required',
            'phone' => 'required',
            'avatar' => 'nullable|file|image'
        ]);
        $userData = $request->only(['first_name','last_name','email','cnic','phone']);
        if($request->has('avatar') and $request->hasFile('avatar')) {
            $fileName = microtime(true).'.'.$request->file('avatar')->getClientOriginalExtension();
            $request->file('avatar')->move(public_path('uploaded_data/'), $fileName);
            $userData['avatar'] = $fileName;
        }
        auth()->user()->update($userData);
        return redirect()->back()->with('success','Profile Updated!');
    }
}
