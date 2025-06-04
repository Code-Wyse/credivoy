<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Scopes\RoomTypeScope;

class RoomType extends Model
{
    use HasFactory;

    protected $fillable = ['hotel_id', 'type', 'price_per_night'];

    // Apply the RoomTypeScope globally
    protected static function booted()
    {
        static::addGlobalScope(new RoomTypeScope);
    }

    public function hotel()
    {
        return $this->belongsTo(Hotel::class);
    }

    // Accessor to get the discounted price or original if not discounted
    public function getFinalPriceAttribute()
    {
        $price = $this->attributes['discounted_price_per_night'] ?? $this->attributes['price_per_night'];
        return number_format($price, 2);
    }
    
}
