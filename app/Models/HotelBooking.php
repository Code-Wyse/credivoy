<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class HotelBooking extends Model
{

    protected $guarded = [];
    protected $fillable = [
        'hotel_id',
        'from_date',
        'to_date',
        'room_type',
        'number_of_rooms',
        'total_amount',
        'amount_paid',  // Newly added column
        'payment_status',
        'payment_type',
        'user_id',
        // Add any other fillable columns here
    ];
    public function hotel(): BelongsTo
    {
        return $this->belongsTo(Hotel::class);
    }
    public function roomType(): BelongsTo
    {
        return $this->belongsTo(RoomType::class, 'room_type', 'type');
    }
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function getRemainingAmountAttribute()
{
    return $this->total_amount - $this->amount_paid;
}
}
