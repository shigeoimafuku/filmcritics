@extends('layouts.app')

@section('content')

<h2 class="border border-dark rounded p-2 mb-5" style="font-size:20px;">{{ Auth::user()->name }}さんのページ</h2>
    <div class="pl-3 mb-5 border-bottom border-dark">評論を書く</div>
        <h3 style="font-size:20px;" class="mb-3">「{{ $film->title }}」</h3>
            {!! Form::model($critic,['route'=>'critics.store']) !!}
                 <div class="form-group">
                    {!! Form::label('shoot','撮影',['for'=>'exampleFormControlTextarea1']) !!}
                    {!! Form::textarea('shoot',null,['class'=>'form-control','id'=>'exampleFormControlTextarea1','rows'=>'3']) !!}
                  </div>
                  
                  <div class="form-group">
                    {!! Form::label('edit','編集',['for'=>'exampleFormControlTextarea1']) !!}
                    {!! Form::textarea('edit',null,['class'=>'form-control','id'=>'exampleFormControlTextarea1','rows'=>'3']) !!}
                  </div>
                  
                  <div class="form-group">
                    {!! Form::label('art','美術',['for'=>'exampleFormControlTextarea1']) !!}
                    {!! Form::textarea('art',null,['class'=>'form-control','id'=>'exampleFormControlTextarea1','rows'=>'3']) !!}
                  </div>
                  <div class="form-group">
                    {!! Form::label('act','演技',['for'=>'exampleFormControlTextarea1']) !!}
                    {!! Form::textarea('act',null,['class'=>'form-control','id'=>'exampleFormControlTextarea1','rows'=>'3']) !!}
                  </div>
                  
                  <div class="form-group">
                    {!! Form::label('music','音楽',['for'=>'exampleFormControlTextarea1']) !!}
                    {!! Form::textarea('music',null,['class'=>'form-control','id'=>'exampleFormControlTextarea1','rows'=>'3']) !!}
                  </div>
                  
                  <div class="form-group">
                    {!! Form::label('screenplay','脚本',['for'=>'exampleFormControlTextarea1']) !!}
                    {!! Form::textarea('screenplay',null,['class'=>'form-control','id'=>'exampleFormControlTextarea1','rows'=>'3']) !!}
                  </div>
                  
                  <div class="form-group">
                    {!! Form::label('theme','テーマ',['for'=>'exampleFormControlTextarea1']) !!}
                    {!! Form::textarea('theme',null,['class'=>'form-control','id'=>'exampleFormControlTextarea1','rows'=>'3']) !!}
                  </div>
                  
                  <div class="form-group">
                    {!! Form::label('casting','キャスティング',['for'=>'exampleFormControlTextarea1']) !!}
                    {!! Form::textarea('casting',null,['class'=>'form-control','id'=>'exampleFormControlTextarea1','rows'=>'3']) !!}
                  </div>
                  
                  {!! Form::hidden('filmid',$film->id) !!}
                  
                  <div class="form-group">
                    {!! Form::label('title','この映画の評論のタイトル') !!}
                    {!! Form::text('title',null,['class'=>'form-control']) !!}
                  </div>
                  
                  {!! Form::submit('送信',['class'=>'btn btn-dark']) !!}
                  
            {!! Form::close() !!}

@endsection