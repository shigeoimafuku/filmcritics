<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Film;

class FilmsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $films = Film::all();
        
        return view('films.index',[
            'films' => $films,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $film = new Film;
        // 管理画面映画タイトル作成ビューを表示
        if (\Auth::user()->admin===1) {
        return view('films.create',[
            'film'=>$film,
            
        ]);
        }
        else {
            return redirect('/');
        }    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'=>'required|max:255|unique:films'
        ]);
        
        /*
        $request->all()->create([
            'title'=>$request->title,
        ]);
        */
        
        
        Film::create([
            'title'=>$request->title,    
        ]);
        
        
        /*
        $film = new Film;
        $film->create([
            'title'=>$request->title,    
        ]);
        */
        
        /*
        $film = new Film;
        $film->title = $request->title;
        $film->save();
        */
        
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
