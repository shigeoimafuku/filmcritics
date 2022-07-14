<div>
    コメントview
</div>
<div>
    {!! Form::open(['route'=>'comments.store']) !!}
                 <div class="form-group">
                    {!! Form::label('content','コメント',['for'=>'exampleFormControlTextarea1']) !!}
                    {!! Form::textarea('content',null,['class'=>'form-control','id'=>'exampleFormControlTextarea1','rows'=>'3']) !!}
                    {!! Form::hidden('critic',$critic->id) !!}
                  </div>
                    {!! Form::submit('送信',['class'=>'btn btn-dark']) !!}
                  
    {!! Form::close() !!}              
</div>
