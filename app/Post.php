<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
class Post extends Model
{
    protected $fillable = ['title', 'description', 'image', 'date', 'posted'];

    public function scopePosted($query){
        return $query->where('posted', 1);
    }

    public function comments()
    {
        return $this->hasMany('App\Comment');
    }

    public function tags()
    {
        return $this->belongsToMany('App\Tag','post_tag')->withPivot('post_id');
    }

    public function scopeFilter($query, $filters)
    {
    	if ($month=$filters['month']) {
    		//$query->whereMonth('date',8);
    		$query->whereMonth('date',Carbon::parse($month)->month);

    	}
    	if ($year=$filters['year']) {
    		$query->whereYear('date',$year);
    	}
    }
    public static function archives()
    {
    	return static::selectRaw('year(date) year,monthname(date) month,count(*) published')
            ->groupBy('year','month')
            ->orderByRaw('min(date) desc')
            ->get()
            ->toArray();
    }
    public function addComment($name,$comment)
    {

        //$this->comment()->create(compact('name','comment'));
        Comment::create([
            'name'=>$name,
            'comment'=>$comment,
            'post_id'=>$this->id
        ]);
    }
}
