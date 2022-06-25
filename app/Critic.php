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
}
