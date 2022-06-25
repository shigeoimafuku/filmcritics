@extends('layouts.app')

@section('content')

<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">id</th>
      <th scope="col">映画タイトル</th>
      <th scope="col">ボタン</th>
    </tr>
  </thead>
  @foreach ($films as $film)
  {!! Form::open(['route'=>['critics.create'],'method'=>'get']) !!}
  <tbody>
    <tr>
      <th scope="row">{{ $film->id }}</th>
      <td>{{ $film->title }}</td>
      {!! Form::hidden('filmid',$film->id) !!}
      <td>{!! Form::submit('評論を書く',['class'=>'btn btn-dark']) !!}</td>
    </tr>
  </tbody>
  {!! Form::close() !!}
  @endforeach
</table>


@endsection