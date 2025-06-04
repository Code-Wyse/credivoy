<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TourComment extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'tour_id',
        'comment',
        'communication',
        'recommend',
        'service',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function tour()
    {
        return $this->belongsTo(Tour::class);
    }
}
