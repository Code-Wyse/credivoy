<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class VideoReview extends Model
{
    protected $guarded = [];

    public function thumbnail(): MorphOne
    {
        return $this->morphOne(Media::class,'media_of');
    }
}
