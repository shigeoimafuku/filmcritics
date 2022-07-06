@extends('layouts.app')

@section('content')

<div class="pl-3 mb-5 border-bottom border-dark">評論できる映画一覧</div>
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">id</th>
      <th scope="col">映画タイトル</th>
      <th scope="col">ボタン</th>
    </tr>
  </thead>
  

  @if (Auth::check())
  <tbody>
    <tr>
      @foreach ( $films as $film )
       
        <th scope="row">{{ $film->id }}</th>
        <td>{{ $film->title }}</td>
      
       @if (App\Critic::alreadyCriticized(Auth::user()->id,$film->id))
    
        <td>{!! link_to_route('critics.show','評論済み',['critic'=>App\Critic::serchCritic(Auth::user()->id,$film->id)->id],['class'=>'btn btn-dark']) !!}</td>
       @else
        <td>{!! link_to_route('critics.create','評論を書く',['filmid'=>$film->id],['class'=>'btn btn-dark']) !!}</td>
       @endif
      
    </tr>
  </tbody>
      @endforeach
  @else
  <tbody>
    <tr>
       @foreach ( $films as $film )
       <th scope="row">{{ $film->id }}</th>
      <td>{{ $film->title }}</td>
      <td>{!! link_to_route('critics.create','評論を書く',['filmid'=>$film->id],['class'=>'btn btn-dark']) !!}</td>
    </tr>
  </tbody>
      @endforeach
 @endif
</table>

@endsection