<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class Booking extends Model
{
    protected $table = 'bookings';
    protected $guarded = [];
    protected $appends = ['remaining_amount'];

    public function persons(): HasMany
    {
        return $this->hasMany(BookingPerson::class,'booking_id','id');
    }
    public function hotel()
    {
    return $this->belongsTo(Hotel::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class,'user_id','id');
    }

    public function tour(): BelongsTo
    {
        return $this->belongsTo(Tour::class,'tour_id','id');
    }

    public function departure(): BelongsTo
    {
        return $this->belongsTo(TourDeparture::class,'tour_departure_id','id');
    }

    public function payments(): MorphMany
    {
        return $this->morphMany(Payment::class,'paymentable');
    }

    public function getRemainingAmountAttribute(){
        $paymentDone = Payment::where(['paymentable_type' => Booking::class,'paymentable_id' => $this->id])->sum('amount');
        return $this->total_amount - $paymentDone;
    }
}
