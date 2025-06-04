<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Blog extends Model
{
    protected $guarded = [];
    protected $casts = [
        'tags' => 'array'
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class,'category_id','id');
    }

    public static function popularTags (): array
    {
        $blogs = self::all(['tags']);
        $tagCounts = [];
        foreach ($blogs as $blog) {
            // Decode the JSON tags
            $tags = $blog->tags;
            // Aggregate the tag counts
            foreach ($tags as $tag) {
                if (isset($tagCounts[$tag])) {
                    $tagCounts[$tag]++;
                } else {
                    $tagCounts[$tag] = 1;
                }
            }
        }
        // Sort the tags by their counts in descending order
        arsort($tagCounts);
        // Get the popular tags
        $popularTags = array_keys($tagCounts);
        return $popularTags;
    }
}
