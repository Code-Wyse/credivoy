<?php

namespace App\Models\Scopes;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;
use Illuminate\Support\Facades\Auth;

class TourScope implements Scope
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
            if ($membership && $membership->trip_discount) {
                $discountPercentage = $membership->trip_discount;

                // Select all columns from the table along with the adjusted price
                $builder->selectRaw("tours.*, price - (price * ($discountPercentage / 100)) as price");
            }
        }
    }
}
