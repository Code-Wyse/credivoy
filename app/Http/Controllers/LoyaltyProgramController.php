<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use App\Models\Membership;
use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoyaltyProgramController extends Controller
{
    public function index()
    {
        // Retrieve the authenticated user
        $user = Auth::user();
    
        // Initialize variables for next tier, required bookings, and price
        $nextTier = '';
        $nextUpgradeBookings = 0;
        $currentMembership = null;
    
        if ($user) {
            // Load the membership relation
            $user->load('membership');
    
            // Get the current membership type
            $currentTier = $user->membership->type ?? null;
    
            // Retrieve the current membership tier data from the database
            $currentMembership = Membership::where('type', $currentTier)->first();
    
            if ($currentMembership) {
                // Get the bookings required for the next tier from the current membership
                $nextUpgradeBookings = $currentMembership->bookings_required;
    
                // Get the next tier from the current membership
                $nextTier = $currentMembership->next_tier;
    
                // Check if the next tier exists
                if ($nextTier) {
                    $nextMembership = Membership::where('type', $nextTier)->first();
    
                    if (!$nextMembership) {
                        // If the next tier doesn't exist in the database, treat the current tier as the highest
                        $nextTier = $currentTier;
                        $nextUpgradeBookings = 0;
                    }
                } else {
                    // If no next tier is set, the user is at the highest tier
                    $nextTier = $currentTier;
                    $nextUpgradeBookings = 0;
                }
            }
        }
    
        // Retrieve all membership types for styling and display
        $membershipTypes = ['standard', 'premium', 'elite', 'signature'];
    
        // Retrieve all memberships in the specified order
        $memberships = Membership::whereIn('type', $membershipTypes)
            ->orderByRaw('FIELD(type, "standard", "premium", "elite", "signature")')
            ->get();
    
        $membershipStyles = [
            [
                'background' => 'linear-gradient(-180deg, rgba(175, 206, 246, .2), rgba(175, 206, 246, 0) 65.16%, rgba(175, 206, 246, 0))',
                'imageUrl' => asset('assets/images/silver_reward.png')
            ],
            [
                'background' => 'linear-gradient(-180deg, rgba(222, 200, 161, .32), rgba(222, 200, 161, 0))',
                'imageUrl' => asset('assets/images/gold_reward.png')
            ],
            [
                'background' => 'linear-gradient(-180deg, rgba(0, 52, 102, 0.24), rgba(0, 52, 102, 0))',
                'imageUrl' => asset('assets/images/platinum_reward.png')
            ],
            [
                'background' => 'linear-gradient(-180deg, rgba(124, 85, 207, .16), rgba(124, 85, 207, 0))',
                'imageUrl' => asset('assets/images/diamond_reward.png')
            ]
        ];
    
        // Load destinations with related hotels
        $data['destinations'] = Destination::with(['hotels'])->limit(5)->get();
    
        // Pass the user, next tier, required bookings, current membership, destinations, memberships, and membershipStyles data to the view
        return view('loyalty-program', compact('user', 'nextTier', 'nextUpgradeBookings', 'currentMembership', 'memberships', 'membershipTypes', 'membershipStyles'))->with($data);
    }
    
    

    public function purchaseMembership(Request $request)
    {
        $user = Auth::user();
        $membershipId = $request->input('membership_id');
    
        // Find the membership the user wants to purchase
        $membership = Membership::find($membershipId);
    
        if (!$membership) {
            return redirect()->back()->with('error', 'Invalid membership selected.');
        }
    
        // Store the purchase in the payments table
        $payment = Payment::create([
            'paymentable_type' => Membership::class, // Reference to the model class
            'paymentable_id' => $user->id, // Store the user ID in paymentable_id
            'payment_type' => 'membership_purchase',
            'amount' => $membership->price,
            'payment_method' => 'advance_deposited', // Specify the payment method if needed
            // Add any additional fields as necessary
        ]);
    
        // Upgrade the user's membership
        $user->membership_id = $membership->id;
        $user->save();
    
        return redirect()->back()->with('success', 'Membership purchased successfully!');
    }
    
}
