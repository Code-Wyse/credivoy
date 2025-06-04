<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class HotelCategory extends Model
{
    protected $fillable = ['name'];

    // Define the relationship to hotels
    public function hotels(): BelongsToMany
    {
        return $this->belongsToMany(Hotel::class, 'category_hotel', 'category_id', 'hotel_id');
    }
}
