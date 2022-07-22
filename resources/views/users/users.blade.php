<div class="pl-3 mb-5 border-bottom border-dark">映画評論家一覧</div>
@if(count($users)>0)
  @foreach($users as $user)
    
        <div class="card" style="width: 12rem; height: 10rem; display:inline-block;">
          <div class="card-body">
          
            {!! link_to_route('users.userpage',$user->name,['userid'=>$user->id],['class'=>'btn btn-link']) !!}
            <?php $user->loadRelationshipCounts(); ?>
            <h6 class="card-subtitle mb-2 mt-2 text-muted" style="font-size:12px">評論投稿数　{{ $user->critics_count }}</h6>
            <span style="font-size:12px">{{ $user->critics()->orderBy('updated_at','desc')->value('updated_at') }}.</span>
          </div>
        </div>
            {!! Form::close() !!}
       
    
  @endforeach
@endif  
  