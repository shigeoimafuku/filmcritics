<div class="pl-3 mb-5 border-bottom border-dark">映画評論家一覧</div>
@if(count($users)>0)
  @foreach($users as $user)
    
        <div class="card" style="width: 12rem; display:inline-block;">
          <div class="card-body">
            {!! Form::open(['route'=>'critics.index','method'=>'get']) !!}
            {!! Form::hidden('userid',$user->id) !!}
            <h5 class="card-title">{!! Form::submit($user->name,['class'=>'btn btn-link']) !!}</h5>
            <?php $user->loadRelationshipCounts(); ?>
            <h6 class="card-subtitle mb-2 text-muted">評論投稿数　{{ $user->critics_count }}</h6>
            <p>{{ $user->updated_at }}</p>
          </div>
        </div>
            {!! Form::close() !!}
       
    
  @endforeach
@endif  
  