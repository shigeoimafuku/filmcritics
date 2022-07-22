@if (Auth::check())

    @if (Auth::id() != $user->id)
        @if (Auth::user()->is_following($user->id))
        {!! Form::open(['route'=>['user.unfollow',$user->id],'method'=>'delete']) !!}
            {!! Form::submit('フォロー中',['class'=>'btn btn-light btn-sm']) !!}
        {!! Form::close() !!}
        @else
        {!! Form::open(['route'=>['user.follow',$user->id]]) !!}
            {!! Form::submit('フォロー',['class'=>'btn btn-dark btn-sm']) !!}
        {!! Form::close() !!}
        @endif
    @endif
@endif    