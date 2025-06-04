<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Hotel extends Model
{
    protected $guarded = [];


    public function scopeByQuery(Builder $query, $searchQuery = null): Builder
    {
        if($searchQuery) {
            $query->where('name','like','%'.$searchQuery.'%')
                ->orWhere('address','like','%'.$searchQuery.'%')
                ->orWhere('facilities','like','%'.$searchQuery.'%')
                ->orWhere('location','like','%'.$searchQuery.'%')
                ->orWhere('year_of_construction','like','%'.$searchQuery.'%')
                ->orWhere('description','like','%'.$searchQuery.'%');
        }
        return $query;
    }

    public function scopeByDates(Builder $query, $checkInDate = null, $checkOutDate = null): Builder
    {
        if ($checkInDate && $checkOutDate) {
            $query
                ->whereDoesntHave('hotelBookings', function ($query) use ($checkInDate, $checkOutDate) {
                    $query->where(function ($query) use ($checkInDate, $checkOutDate) {
                        $query->whereBetween('from_date', [$checkInDate, $checkOutDate])
                            ->orWhereBetween('to_date', [$checkInDate, $checkOutDate])
                            ->orWhere(function ($query) use ($checkInDate, $checkOutDate) {
                                $query->where('from_date', '<=', $checkInDate)
                                    ->where('to_date', '>=', $checkOutDate);
                            });
                    });
                })
                ->orWhereRaw(
                    'hotels.number_of_rooms > (
                    SELECT IFNULL(SUM(hotel_bookings.number_of_rooms), 0)
                    FROM hotel_bookings
                    WHERE hotel_bookings.hotel_id = hotels.id
                    AND (
                        (hotel_bookings.from_date BETWEEN ? AND ?)
                        OR (hotel_bookings.to_date BETWEEN ? AND ?)
                        OR (? <= hotel_bookings.from_date AND ? >= hotel_bookings.to_date)
                    )
                )',
                    [$checkInDate, $checkOutDate, $checkInDate, $checkOutDate, $checkInDate, $checkOutDate]
                );
        }

        return $query;
    }

    public function scopeByMinPrice(Builder $query, $minPrice = null): Builder
    {
        if($minPrice) {
            $query->whereHas('roomTypes', function(Builder $q) use ($minPrice) {
                $q->where('price_per_night','>=',$minPrice);
            });
        }
        return $query;
    }

    public function scopeByMaxPrice(Builder $query, $maxPrice = null): Builder
    {
        if($maxPrice) {
            $query->whereHas('roomTypes', function(Builder $q) use ($maxPrice) {
                $q->where('price_per_night','<=',$maxPrice);
            });
        }
        return $query;
    }

    public function scopeByRating(Builder $query, $rating = null): Builder
    {
        if($rating) {
            if(is_array($rating)) {
                $query->whereIn('rating',$rating);
            }
            else {
                $query->where('rating','=',$rating);
            }
        }
        return $query;
    }

    public function scopeByCategoryId (Builder $query, $categoryId = null): Builder
    {
        if($categoryId) {
            if(is_array($categoryId)) {
                $query->whereIn('hotel_category_id',$categoryId);
            }
            else {
                $query->where('hotel_category_id','=',$categoryId);
            }
        }
        return $query;
    }


    // Relationship with Destination
    public function destination()
    {
        return $this->belongsTo(Destination::class);
    }

    // Relationship with Categories
    public function hotelCategory()
    {
        return $this->belongsTo(HotelCategory::class);
    }
    public function hotelBookings(): HasMany
    {
        return $this->hasMany(HotelBooking::class,'hotel_id','id');
    }
    public function roomTypes()
    {
        return $this->hasMany(RoomType::class);
    }

    public function hotelComments(): HasMany
    {
        return $this->hasMany(HotelComment::class,'hotel_id','id');
    }

    public function image(): Attribute
    {
        return Attribute::make(
            get: fn (mixed $value) => asset('images/'.$value)
        );
    }

}
