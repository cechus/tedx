<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function tags()
    {
        return $this->belongsToMany('App\Tag','post_tag')->withPivot('post_id');
    }

    public function comments()
    {
        return $this->hasMany('App\Comment');
    }
}

