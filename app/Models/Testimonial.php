<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'content', 'image'];
    public function picture()
    {
        return $this->morphOne(Media::class, 'media_of');
    }
}
