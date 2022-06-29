@extends('layouts.app')

@section('content')

<h2 class="border border-dark rounded p-2 mb-5" style="font-size:20px;">{{ $user->name }}さんのページ</h2>
    <div class="pl-3 mb-5 border-bottom border-dark">映画評論一覧</div>
   
    @foreach($critics as $critic)
        
        
        <ul class="list-group">
          <li class="list-group-item"><span style="font-weight:bold">評論した映画タイトル</span>「{{ $critic->film()->first()->title }}」　　<span style="font-size:13px">〜評論文のタイトル「{{ $critic->title }}」〜</span></li>
        </ul>
             
                 
               
        
    @endforeach
   
        
@endsection    
    