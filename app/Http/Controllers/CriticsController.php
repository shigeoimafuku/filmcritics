<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Critic;
use App\Film;
use App\User;
use App\Comment;

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
        
        return redirect('/users/mypage');
        
        
    }
    
   
    public function show($id)
    {
        $critic = Critic::findOrFail($id);
        
        $comments=$critic->comments()->orderBy('id','desc')->paginate(10);
        
        
        
        
            return view('critics.show',[
           'critic' => $critic, 
           'comments' => $comments,
           
        ]);
       
    }
    
    public function index()
    {
        $critics=Critic::paginate(10);
        
        
        return view('critics.index',[
            'critics'=>$critics,
        ]);
    }
    
    public function edit($id)
    {
        $critic = Critic::findOrFail($id);
        if (\Auth::id()===$critic->user_id){
                $film = $critic->film($critic->film_id)->first();
                
                return view('critics.edit',[
                    'critic'=>$critic,
                    'film' => $film,
                ]);
        }
        
        else{
            return redirect('/');
        }
    }
    
    public function update(Request $request, $id)
    {
        $critic = Critic::findOrFail($id);
        if (\Auth::id()===$critic->user_id){
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
            
            $critic->update([
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
            
            return redirect('/users/mypage');
        }
        
        else{
            return redirect('/');
        }
        
    }
    
    public function destroy($id){
        
        $critic=Critic::findOrFail($id);
        
        if (\Auth::id()===$critic->user_id){
            $critic->delete();
        }
         return redirect('/users/mypage');
    }     
}


