<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Scopes\TourScope;

class Tour extends Model
{
    use HasFactory;
    protected $table = "tours";
    protected $guarded = [];
    protected $appends = [
        'discounted_deal','rating','rating_count','is_favorite','available_to_book'
    ];

    /**
     * The "booted" method of the model.
     *
     * @return void
     */
    protected static function booted()
    {
        static::addGlobalScope(new TourScope);
    }
    public function categories(){
        return $this->hasManyThrough(Category::class,TourCategory::class,'tour_id','id','id','category_id');
    }

    public function destinations(){
        return $this->hasManyThrough(Destination::class,TourDestination::class,'tour_id','id','id','destination_id');
    }

    public function media(){
        return $this->morphMany(Media::class,'media_of');
    }

    public function departures(){
        return $this->hasMany(TourDeparture::class,'tour_id','id');
    }

    public function getDiscountedDealAttribute(){
        return ($this->original_price && $this->price);
    }

    public function itineraries(){
        return $this->hasMany(Itinerary::class,'tour_id','id')->orderBy('day','asc');
    }

    public function reviews(){
        return $this->hasMany(Review::class,'tour_id','id');
    }

    public function getRatingAttribute(){
        return Review::where('tour_id',$this->id)->avg('rating');
    }

    public function getRatingCountAttribute(){
        return Review::where('tour_id',$this->id)->count('rating');
    }
    public static function getFestivalTours(){
        return self::with("media")->whereHas("categories",function($q){
            $q->where("name","like","%Festivals Of Pakistan%");
        })->paginate(3);
    }

    public static function getTrandingTours(){
        return self::with(["media",'categories' => function($q){
            $q->limit(5);
        }])->whereHas("reviews",function($query){
            $query->where("rating",">",4);
        })->paginate(4);
    }

    public function getCategoryIdsAttribute(){
        return TourCategory::where(['tour_id' => $this->id])->get()->pluck('category_id')->toArray();
    }

    public function getDestinationIdsAttribute(){
        return TourDestination::where(['tour_id' => $this->id])->get()->pluck('destination_id')->toArray();
    }

    public function getIsFavoriteAttribute(){
        if(auth()->user()){
            return (bool) Favorite::where(['user_id' => auth()->id(),'tour_id' => $this->id])->count();
        }
        return false;
    }

    public function scopeByRating(Builder $query, $sort = 'high'): Builder
    {
        if($sort === 'high'){
            return $query->select('tours.*')
                ->leftJoin('reviews','reviews.tour_id','=','tours.id')
                ->selectRaw('AVG(reviews.rating) AS avg_rating')
                ->groupBy('tours.id')
                ->orderBy('avg_rating','desc');
        }
        else {
            return $query->select('tours.*')
                ->leftJoin('reviews','reviews.tour_id','=','tours.id')
                ->selectRaw('AVG(reviews.rating) AS avg_rating')
                ->groupBy('tours.id')
                ->orderBy('avg_rating');
        }
    }

    public function getAvailableToBookAttribute(): bool
    {
        $tourDepartures = TourDeparture::where(['tour_id' => $this->id])->whereDate('departure_date','>=',now())->count();
        return $tourDepartures > 0;
    }
}
