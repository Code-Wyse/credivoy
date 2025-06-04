<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;

    protected $fillable = [
        'make',
        'model',
        'year',
        'type',
        'license_plate',
        'color',
        'capacity',
        'fuel_type',
        'transmission',
        'price_per_day',
        'features',
        'image',
        'status',
    ];
}
