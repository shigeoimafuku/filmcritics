<h4 style="font-size:15px" class="mt-3">この評論へのコメント</h4>
   @foreach($comments as $comment)
        
           <div class="border m-3 p-1">
                <div style="white-space: pre-line">{{ $comment->content }}</div><br>
                <span style="font-size:12px">{{ $comment->user($comment->user_id)->first()->name }}</span>
            </div>
       
   @endforeach
    

<div>
    {!! Form::open(['route'=>'comments.store']) !!}
                 <div class="form-group">
                    {!! Form::label('content','コメント記入',['for'=>'exampleFormControlTextarea1']) !!}
                    {!! Form::textarea('content',null,['class'=>'form-control','id'=>'exampleFormControlTextarea1','rows'=>'3']) !!}
                    {!! Form::hidden('critic',$critic->id) !!}
                  </div>
                    {!! Form::submit('送信',['class'=>'btn btn-dark']) !!}
                  
    {!! Form::close() !!}              
</div>
