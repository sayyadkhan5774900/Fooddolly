<?php

namespace App;

use TCG\Voyager\Models\Post as ModelsPost;

class Post extends ModelsPost
{
    public function author()
    {
        return $this->belongsTo(User::class, 'author_id');
    }

    public static function findBySlug($slug)
    {
        return static::where('slug', $slug)->first();
    }
}
