<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ambassador extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $dates = ['dob','created_at','updated_at'];
}
