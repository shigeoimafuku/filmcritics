<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Critic extends Model
{
    protected $fillable=[
        'title','theme','shoot',
        'edit','art','act',
        'screenplay','casting','music',
        'film_id',
    ];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function film()
    {
        return $this->belongsTo(Film::class);
    }
    
    static public function alreadyCriticized($user_id,$film_id)
    {
        return self::where('user_id',$user_id)
                    ->where('film_id',$film_id)
                    ->count()>0;
    }
    
    static public function serchCritic($user_id,$film_id)
    {
        return self::where('user_id',$user_id)
                    ->where('film_id',$film_id)
                    ->first();
    }
    
    public function comments()
    {
        $this->hasMany(Comment::class);
    }
    
}
