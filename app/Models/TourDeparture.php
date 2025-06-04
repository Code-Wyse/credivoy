<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TourDeparture extends Model
{
    use HasFactory;
    protected $table = "tour_departures";
    protected $guarded = [];
    protected $dates = ['departure_date'];

    public function tour(){
        return $this->belongsTo(Tour::class,'tour_id','id');
    }

}
