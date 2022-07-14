@extends('layouts.app')

@section('content')
  @if (Auth::check())
  <h2 class="border border-dark rounded p-2 mb-5" style="font-size:20px;">{!! link_to_route('users.userpage',$critic -> user($critic -> user_id)->first()->name,['userid'=>$critic -> user($critic -> user_id)->first()->id]) !!}さんのページ</h2>
   <div class="pl-3 mb-5 border-bottom border-dark">「{{ $critic->film($critic->film_id)->first()->title }}」の評論</div>
        
        <nav>
              <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true" style="font-size:12px">タイトル</a>
                <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false" style="font-size:12px">撮影</a>
                <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false" style="font-size:12px">編集</a>
                <a class="nav-item nav-link" id="nav-art-tab" data-toggle="tab" href="#nav-art" role="tab" aria-controls="nav-art" aria-selected="false" style="font-size:12px">美術</a>
                <a class="nav-item nav-link" id="nav-act-tab" data-toggle="tab" href="#nav-act" role="tab" aria-controls="nav-act" aria-selected="false" style="font-size:12px">演技</a>
                <a class="nav-item nav-link" id="nav-screenplay-tab" data-toggle="tab" href="#nav-screenplay" role="tab" aria-controls="nav-screenplay" aria-selected="false" style="font-size:12px">脚本</a>
                <a class="nav-item nav-link" id="nav-music-tab" data-toggle="tab" href="#nav-music" role="tab" aria-controls="nav-music" aria-selected="false" style="font-size:12px">音楽</a>
                <a class="nav-item nav-link" id="nav-casting-tab" data-toggle="tab" href="#nav-casting" role="tab" aria-controls="nav-casting" aria-selected="false" style="font-size:12px">キャスティング</a>
                <a class="nav-item nav-link" id="nav-theme-tab" data-toggle="tab" href="#nav-theme" role="tab" aria-controls="nav-theme" aria-selected="false" style="font-size:12px">テーマ</a>
              </div>
        </nav>
            <div class="tab-content p-2 rounded border border-top-0" id="nav-tabContent">
              <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">評論タイトル「{{ $critic->title }}」</div>
              <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">{{ $critic->shoot }}</div>
              <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">{{ $critic->edit }}</div>
              <div class="tab-pane fade" id="nav-art" role="tabpanel" aria-labelledby="nav-art-tab">{{ $critic->art }}</div>
              <div class="tab-pane fade" id="nav-act" role="tabpanel" aria-labelledby="nav-act-tab">{{ $critic->act }}</div>
              <div class="tab-pane fade" id="nav-screenplay" role="tabpanel" aria-labelledby="nav-screenplay-tab">{{ $critic->screenplay }}</div>
              <div class="tab-pane fade" id="nav-music" role="tabpanel" aria-labelledby="nav-music-tab">{{ $critic->music }}</div>
              <div class="tab-pane fade" id="nav-casting" role="tabpanel" aria-labelledby="nav-casting-tab">{{ $critic->casting }}</div>
              <div class="tab-pane fade" id="nav-theme" role="tabpanel" aria-labelledby="nav-theme-tab">{{ $critic->theme }}</div>
            </div>
        @if (Auth::user()->id == $critic -> user($critic -> user_id)->first()->id)        
          <div class="mt-3">
            {!! link_to_route('critics.edit','この評論を編集',['critic'=>$critic->id],['class'=>'btn btn-dark']) !!} 
          </div>
          <div class="mt-5">
            {!! Form::open(['route'=>['critics.destroy',$critic->id],'method'=>'delete']) !!}
                  {!! Form::submit('この評論を削除',['class'=>'btn btn-danger btn-sm']) !!}
            {!! Form::close() !!}
          </div>  
        @endif
 
  @endif
  @include('comments.comments')
@endsection    