@extends('layouts.app')

@section('content')

<h2 class="border border-dark rounded p-2 mb-5 d-flex justify-content-between" style="font-size:20px;">
    <div>{{ $user->name }}さんのページ</div> <div>@include('user_follow.follow_button')</div></h2>
    <div class="pl-3 mb-5 border-bottom border-dark">映画評論一覧</div>
    
         <table class="table">
            <thead class="thead-dark">
                <tr>
                  
                  <th scope="col" style="font-size:13px">映画タイトル</th>
                  {{-- <th scope="col" style="font-size:13px">評論した人</th> --}}
                  <th scope="col" style="font-size:13px">評論タイトル</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                   @foreach($critics as $critic)
                  
                  <td style="font-size:13px">{!! link_to_route('critics.show',$critic->film()->first()->title ,['critic'=>$critic->id]) !!}</td>
                  <td style="font-size:13px">「{{ $critic->title }}」</td>
                  {{-- <td style="font-size:13px">{!! link_to_route('critics.show',$critic->title ,['critic'=>$critic->id]) !!}</td> --}}
                </tr>
               @endforeach
            </tbody>
        </table>
       
        
       {{-- @if(count($critics)>0)
            @foreach($critics as $critic)
                <ul class="list-group">
                  <li class="list-group-item">{!! link_to_route('critics.show',$critic->film()->first()->title ,['critic'=>$critic->id]) !!}　　<span style="font-size:13px">〜評論文のタイトル「{{ $critic->title }}」〜</span></li>
                </ul>
            @endforeach
        @endif --}}
@endsection      