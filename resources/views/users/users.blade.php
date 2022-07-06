<div class="pl-3 mb-5 border-bottom border-dark">映画評論家一覧</div>
@if(count($users)>0)
  @foreach($users as $user)
    
        <div class="card" style="width: 12rem; display:inline-block;">
          <div class="card-body">
          {{--  {!! Form::open(['route'=>'critics.mypage','method'=>'get']) !!}
            {!! Form::hidden('userid',$user->id) !!}
            <h5 class="card-title">{!! Form::submit($user->name,['class'=>'btn btn-link']) !!}</h5> --}}
            {!! link_to_route('critics.mypage',$user->name,['userid'=>$user->id],['class'=>'btn btn-link']) !!}
            <?php $user->loadRelationshipCounts(); ?>
            <h6 class="card-subtitle mb-2 mt-2 text-muted" style="font-size:12px">評論投稿数　{{ $user->critics_count }}</h6>
            <span style="font-size:12px">{{ $user->critics()->orderBy('created_at','desc')->value('created_at') }}</span>
          </div>
        </div>
            {!! Form::close() !!}
       
    
  @endforeach
@endif  
  