<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class BookingPerson extends Model
{
    protected $table = 'booking_people';
    protected $guarded = [];

    public function booking(): BelongsTo
    {
        return $this->belongsTo(Booking::class,'booking_id','id');
    }

}
