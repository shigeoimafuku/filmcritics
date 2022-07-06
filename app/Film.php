<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    protected $fillable=[
        'title',    
    ];
    
    public function critics()
    {
        return $this->hasMany(Critic::class);
    }
    
  
}
