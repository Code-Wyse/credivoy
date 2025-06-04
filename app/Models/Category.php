<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    use HasFactory;
    protected $table = "categories";
    protected $guarded = [];

    public function image(){
        return $this->morphOne(Media::class,'media_of');
    }

    public function tours(){
        return $this->belongsToMany(Tour::class,TourCategory::class);
    }

    public function reviews(){
        return $this->hasManyThrough(Tour::class,Review::class);
    }
    public static function trandingCategories(){
        $dattaa = self::withCount("tours as tours_count")
        // ->with('reviews')
        // ->withAvg("reviews",'rating')
        ->orderBy("tours_count","desc")->paginate(10);

        return $dattaa;
    }

    public function blogs(): HasMany
    {
        return $this->hasMany(Blog::class,'category_id','id');
    }

    public function getBlogsCountAttribute(): int
    {
        return $this->blogs()->count();
    }

}
