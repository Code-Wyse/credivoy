<?php

namespace App\Http\Controllers;

use App\Mail\ThanksForBooking;
use App\Models\Booking;
use App\Models\Tour;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{
    public function store(Request $request)
    {
        // Validate the incoming request
        $request->validate([
            'tour_id' => 'required|exists:tours,id',
            'tour_departure_id' => 'required|exists:tour_departures,id',
            'adult_persons' => 'required|numeric|min:1',
            'child_persons' => 'required|numeric',
            'coins_to_use' => 'nullable|integer|min:0', // Optional field for using coins
        ]);
    
        // Find the tour
        $tour = Tour::findOrFail($request->tour_id);
    
        // Calculate the total price
        $totalPrice = $tour->price * $request->adult_persons;
        if ($request->child_persons && $request->child_persons > 0) {
            $totalPrice += $tour->child_price * $request->child_persons;
        }
    
        // Handle coin usage if applicable
        $user = Auth::user();
        if ($request->has('coins_to_use') && $user) {
            $coinsToUse = (int) $request->input('coins_to_use');
            if ($coinsToUse > 0 && $coinsToUse <= $user->trip_coins) {
                $discount = ($coinsToUse / 1000) * 10; // Assuming 1000 coins = 10 PKR
                $totalPrice -= $discount;
    
                // Ensure the total price does not go below zero
                if ($totalPrice < 0) {
                    $totalPrice = 0;
                }
    
                // Deduct the used coins from the user's balance
                $user->trip_coins -= $coinsToUse;
                $user->save();
            }
        }
    
        // Create the booking
        $booking = Booking::create([
            'user_id' => auth()->id(),
            'tour_id' => $request->tour_id,
            'tour_departure_id' => $request->tour_departure_id,
            'payment_type' => 'cash',
            'payment_status' => 'pending',
            'total_amount' => $totalPrice
        ]);
    
        // Associate the number of persons with the booking
        $booking->persons()->create([
            'age_category' => 'Adult',
            'number_of_persons' => $request->adult_persons
        ]);
    
        if ($request->child_persons && $request->child_persons > 0) {
            $booking->persons()->create([
                'age_category' => 'Child',
                'number_of_persons' => $request->child_persons
            ]);
        }
    
        // Add trip coins to the user based on the total price
        $coinsEarned = floor($totalPrice / 10000) * 100; // 100 Coins for every 10000 PKR spent
        $user->trip_coins += $coinsEarned;
        $user->save();
    
        // Check if the user's membership should be upgraded
        $user->checkAndUpgradeMembership();
    
        // Reload the booking with its relationships
        $booking = Booking::with(['user', 'tour', 'departure'])->findOrFail($booking->id);
    
        // Send a confirmation email to the user
        Mail::to($user->email)->send(new ThanksForBooking($booking));
    
        // Flash a success message and redirect back
        session()->flash('success', 'Booking Done!');
        return redirect()->back();
    }
}
