<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable=['content','critic_id'];
    
    public function critic()
    {
        return $this->belongsTo(Critic::class);
    }
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    
}
