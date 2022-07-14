<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable=['content','critic_id'];
    
    function critic()
    {
        return $this->belongsTo(Critic::class);
    }
    
    function comment_user()
    {
        return $this->belongsTo(User::class);
    }
}
