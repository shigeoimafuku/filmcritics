<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommentsController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'content'=>'required|max:255',
        ]);

        $request->user()->comments()->create([
            'content'=>$request->content,
            'critic_id'=>$request->critic,
            
        ]);
        
        return back();
    }
    
    
    
}
