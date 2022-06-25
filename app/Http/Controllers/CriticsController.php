<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Critic;
use App\Film;

class CriticsController extends Controller
{
    public function create(Request $request)
    {
        $critic = new Critic;
        $filmid=$request->filmid;
        $film=Film::findOrFail($filmid);
        
        return view('critics.create',[
            'film'=>$film,  
            'critic'=>$critic,
        ]);
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'edit'=>'required',
            'shoot'=>'required',
            'screenplay'=>'required',
            'act'=>'required',
            'art'=>'required',
            'music'=>'required',
            'theme'=>'required',
            'casting'=>'required',
            'title'=>'required|max:255',
        ]);
        
        $request->user()->critics()->create([
            'edit'=>$request->edit,
            'shoot'=>$request->shoot,
            'screenplay'=>$request->screenplay,
            'act'=>$request->act,
            'art'=>$request->art,
            'music'=>$request->music,
            'theme'=>$request->theme,
            'casting'=>$request->casting,
            'title'=>$request->title,
            'film_id'=>$request->filmid,
        ]);
        
        return redirect('/');
        
        
        
    }
}


