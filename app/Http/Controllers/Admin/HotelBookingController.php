<?php

namespace App\Http\Controllers\Admin;

use App\Models\HotelBooking;
use App\Models\Hotel;
use App\Models\RoomType;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Log;
use \Illuminate\Support\Facades\Validator;



class HotelBookingController extends Controller
{
    public function store(Request $request, $id)
    {
        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'You need to log in to make a booking.');
        }
    
        // Validate the request data
        $validatedData = Validator::make($request->all(), [
            'book-hotel-from' => 'required|date',
            'book-hotel-to' => 'required|date|after_or_equal:book-hotel-from',
            'room-type' => 'required|string',
            'number_of_rooms' => 'required|numeric|min:1',
            'payment_type' => 'nullable|string',
            'coins_to_use' => 'nullable|integer|min:0', // Optional field for using coins
        ]);
    
        if ($validatedData->fails()) {
            return redirect()->back()->withErrors($validatedData)->withInput();
        }
    
        $hotel = Hotel::findOrFail($id);
    
        $roomType = $hotel->roomTypes()->where('type', $request->get('room-type'))->firstOrFail();
    
        $hotelBooking = new HotelBooking();
        $hotelBooking->hotel_id = $hotel->id;
        $hotelBooking->from_date = $request->input('book-hotel-from');
        $hotelBooking->to_date = $request->input('book-hotel-to');
        $hotelBooking->room_type = $request->input('room-type');
        $hotelBooking->number_of_rooms = $request->input('number_of_rooms');
        $hotelBooking->total_amount = $roomType->price_per_night * 
            (Carbon::parse($request->input('book-hotel-to'))->diffInDays(Carbon::parse($request->input('book-hotel-from')))) * $request->input('number_of_rooms');
        $hotelBooking->amount_paid = 0;
        $hotelBooking->payment_status = "pending";
        $hotelBooking->payment_type = "cash";
        $hotelBooking->user_id = Auth::id(); // Store the ID of the logged-in user
    
        // Handle coin usage if applicable
        $user = Auth::user();
        if ($request->has('coins_to_use') && $user) {
            $coinsToUse = (int) $request->input('coins_to_use');
            if ($coinsToUse > 0 && $coinsToUse <= $user->trip_coins) {
                $discount = ($coinsToUse / 1000) * 10; // Assuming 1000 coins = 10 PKR
                $hotelBooking->total_amount -= $discount; // Deduct the discount from the total amount
    
                // Ensure the total amount does not go below zero
                if ($hotelBooking->total_amount < 0) {
                    $hotelBooking->total_amount = 0;
                }
    
                // Deduct the used coins from the user's balance
                $user->trip_coins -= $coinsToUse;
                $user->save();
            }
        }
    
        $hotelBooking->save();
    

        // Add trip coins to the user based on the total price
        $coinsEarned = floor($hotelBooking->total_amount / 10000) * 75; // 75 Coins for every 10000 PKR spent
        $user->trip_coins += $coinsEarned;
        $user->save();
        $user->checkAndUpgradeMembership();

        // Store the payment in the payments table
        $payment = new \App\Models\Payment();
        $payment->paymentable_type = HotelBooking::class;
        $payment->paymentable_id = $user->id;
        $payment->payment_type = 'advance_deposited'; // or whatever type you want to use
        $payment->payment_method = $hotelBooking->payment_type;
        $payment->amount = $hotelBooking->total_amount;
        $payment->save();
            
        return redirect()->route('hotels.show', $hotel->id)
        ->with('success', 'Booking successful!')
        ->with('user', $user);
    }
    

    public function index()
    {
        $bookings = HotelBooking::with('hotel', 'roomType', 'user')->get();
        return view('admin.hotel_bookings.index', compact('bookings'));
    }
}
