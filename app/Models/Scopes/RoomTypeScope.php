<?php

namespace App\Models\Scopes;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;
use Illuminate\Support\Facades\Auth;

class RoomTypeScope implements Scope
{
    /**
     * Apply the scope to a given Eloquent query builder.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $builder
     * @param  \Illuminate\Database\Eloquent\Model  $model
     * @return void
     */
    public function apply(Builder $builder, Model $model)
    {
        // Ensure that the query only runs if a user is authenticated
        if (Auth::check()) {
            // Get the current authenticated user
            $user = Auth::user();
            $membershipId = $user->membership_id;  // Assuming `membership_id` is stored in `users` table

            // Fetch the membership discount from the memberships table
            $membership = \App\Models\Membership::find($membershipId);

            // Check if the membership exists and has a discount percentage
            if ($membership && $membership->hotel_discount) {
                $discountPercentage = $membership->hotel_discount;

                // Apply discount to room prices with alias to avoid overwriting
                $builder->select('room_types.*')
                        ->selectRaw(
                            "room_types.price_per_night - (room_types.price_per_night * ($discountPercentage / 100)) as price_per_night"
                        )
                        ->with('hotel'); // Ensure to load hotel relationship
            }
        }
    }
}
