<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Payment extends Model
{
    protected $guarded = [];

    public function paymentable(): MorphTo
    {
        return $this->morphTo();
    }
}
