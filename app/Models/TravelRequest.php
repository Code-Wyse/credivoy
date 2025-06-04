<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TravelRequest extends Model
{
    use HasFactory;

    protected $fillable = [
        'selectField', 'datepicker', 'name', 'lname', 'phone', 'email', 'add-requirement'
    ];
}
