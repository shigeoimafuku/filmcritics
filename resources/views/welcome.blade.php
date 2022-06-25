@extends('layouts.app')

@section('content')
    @if(Auth::check())
       
        @if (Auth::user()->admin==1)        
            <p>{!! link_to_route('films.create','管理画面',[],[]) !!}</p>
        @else
            <p>マイページ</p>
        @endif
        
    @endif    
    
@endsection