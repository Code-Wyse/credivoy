<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
    use HasFactory;
    protected $table = "destinations";
    protected $guarded = [];
    public function picture()
    {
        return $this->morphOne(Media::class, 'media_of');
    }

    public function tours()
    {
        return $this->belongsToMany(Tour::class, TourDestination::class);
    }

    public function scopeDestinationsHasManyTours()
    {
        return self::with("tours")
            ->withCount(['tours as tours_count'])
            ->orderBy("tours_count", 'desc');
    }
    public function hotels()
    {
        return $this->hasMany(Hotel::class);
    }
    
}
