<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Review extends Model
{
    use HasFactory;
    protected $table = "reviews";
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function tour()
    {
        return $this->belongsTo(Tour::class, 'tour_id', 'id');
    }

    public function scopeGetTopReviews($query)
    {
        return $query->with("user")->where("rating", ">=", 4)->orderBy("rating", 'desc');
    }

    //    public function setUserIdAttribute($value)
    //    {
    //        $this->attributes['user_id'] = Auth::id();
    //    }

    //    protected static function booted()
    //    {
    //        static::creating(function ($product) {
    //            $product->user_id = Auth::id();
    //        });
    //    }

}
