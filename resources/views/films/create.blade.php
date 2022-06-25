@extends('layouts.app')

@section('content')

    <div class='text-center'>
     <h1>管理画面（管理者専用）</h1>
 </div>
 
 <div class="row">
     <div class="col-sm-6 offset-sm-3">
     
         {!! Form::model($film,['route'=>'films.store']) !!}
            <div class="form-group">
                {!! Form::label('title','映画タイトル入力') !!}
                {!! Form::text('title',null,['class'=>'form-control']) !!}
            </div>
            
            {!! Form::submit('映画登録',['class'=>'btn btn-dark btn-block']) !!}
        {!! Form::close() !!} 

@endsection