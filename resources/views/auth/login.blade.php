@extends('layouts.app')

@section('content')
 
 <div class='text-center'>
     <h1>ログイン</h1>
 </div>
 
 <div class="row">
     <div class="col-sm-6 offset-sm-3">
     
         {!! Form::open(['route'=>'login.post']) !!}
            <div class="form-group">
                {!! Form::label('email','メールアドレス') !!}
                {!! Form::email('email',null,['class'=>'form-controll']) !!}
            </div>
            
            <div class="form-group">
                {!! Form::label('password','パスワード') !!}
                {!! Form::password('password',['class'=>'form-controll']) !!}
                
            </div>
            
            {!! Form::submit('ログイン',['class'=>'btn btn-dark btn-block']) !!}
        {!! Form::close() !!} 
        
        // ユーザ登録ページへのリンク
        <p class="mt-2">ユーザ登録がまだの方は {!! link_to_route('signup.get','こちら') !!}</p>
     </div>
 </div>
@endsection