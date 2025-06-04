<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Membership extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
        'trip_coins_percentage',
        'hotel_discount',
        'trip_discount',
        'free_vip_lounge',
        'no_refund_handling_fees',
        'priority_assistance',
        'price',
        'next_tier',
        'bookings_required',
    ];

    public function checkAndUpgradeMembership()
    {
        $bookingsCount = $this->bookings()->count();
        $currentMembership = $this->membership;
    
        // If the user has no membership, allocate the first membership type
        if (!$currentMembership) {
            $currentMembership = Membership::orderBy('id')->first();
            $this->membership()->associate($currentMembership);
            $this->save();
        }
    
        // Keep checking for upgrades until the user reaches the highest possible membership
        while ($currentMembership && $currentMembership->next_tier) {
            // Find the next membership based on the current membership's next tier
            $nextMembership = Membership::where('type', $currentMembership->next_tier)->first();
    
            if ($nextMembership && $bookingsCount >= $nextMembership->bookings_required) {
                // Upgrade the user's membership to the next tier
                $this->membership()->associate($nextMembership);
                $this->save();
                $currentMembership = $nextMembership; // Move to the next level for further checks
            } else {
                break; // Stop if no further upgrade is possible
            }
        }
    }
    

    public static function getMembershipByType($type)
    {
        return self::where('type', $type)->first();
    }
}
