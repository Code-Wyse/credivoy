<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;

    protected $guarded = [];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'permissions' => 'array'
    ];

    protected $appends = [
        'full_name'
    ];

    public function getFullNameAttribute()
    {
        return $this->first_name . ' ' . $this->last_name;
    }

    public function reviews()
    {
        return $this->hasMany(Review::class, 'user_id', 'id');
    }

    public function favorites()
    {
        return $this->hasMany(Favorite::class, 'user_id', 'id');
    }

    public function membership()
    {
        return $this->belongsTo(Membership::class);
    }

    public function bookings()
    {
        return $this->hasMany(Booking::class, 'user_id', 'id');
    }

    public function hotelBookings()
    {
        return $this->hasMany(HotelBooking::class, 'user_id', 'id');
    }

    public function vehicleBookings(){
        return $this->hasMany(VehicleBooking::class,'user_id','id');
    }

    public function calculatePoints($amount)
    {
        $membership = $this->membership;

        if (!$membership) {
            return 0;
        }

        return ($amount * $membership->trip_coins_percentage) / 100;
    }

    public function addTripCoins($amount)
    {
        $points = $this->calculatePoints($amount);
        $this->trip_coins += $points;
        $this->save();
    }

    public function checkAndUpgradeMembership()
    {
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
    
            if ($nextMembership) {
                // Upgrade the user's membership to the next tier
                $this->membership()->associate($nextMembership);
                $this->save();
                $currentMembership = $nextMembership; // Move to the next level for further checks
            } else {
                break; // Stop if no further upgrade is possible
            }
        }
    }
    
    private function upgradeMembership($newMembershipType)
    {
        $membership = Membership::where('type', $newMembershipType)->first();
    
        if ($membership) {
            $this->membership_id = $membership->id;
            $this->save();
        }
    }
    

    public function avatar(): Attribute
    {
        return Attribute::make(
            get: function(mixed $value, array $attributes){
                if ($value) {
                    if(str_contains($value, 'http')) {
                        return $value;
                    }
                    else {
                        return asset('uploaded_data/'.$value);
                    }
                }
                return 'https://ui-avatars.com/api?name='.$attributes['first_name'].'%20'.$attributes['last_name'].'&background=random&size=512';
            }
        );
    }

    public function hasPermission(string $permission): bool
    {
        if($this->super_admin) {
            return true;
        }
        if($this->permissions and is_array($this->permissions)) {
            return in_array($permission, $this->permissions);
        }
        return false;
    }
}
