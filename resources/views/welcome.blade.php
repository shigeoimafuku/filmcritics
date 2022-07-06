@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="d-none d-sm-block col-3 border">
        @if(Auth::check())
           
            @if (Auth::user()->admin==1) 
                <ul class="list-group">
                    <li class="list-group-item">
                        {!! link_to_route('users.index','評論家一覧',[],['style'=>'font-size:small']) !!}
                    </li>
                    <li class="list-group-item">
                        {!! link_to_route('critics.index','評論文一覧',[],['style'=>'font-size:small']) !!}
                    </li>
                    <li class="list-group-item">
                        {!! link_to_route('films.index','評論する映画を選ぶ',[],['style'=>'font-size:small']) !!}
                    </li>
                    <li class="list-group-item">
                        {!! link_to_route('logout.get','ログアウト',[],['style'=>'font-size:small']) !!}
                    </li>
                    <li class="list-group-item">
                        {!! link_to_route('critics.mypage',Auth::user()->name.'さんのマイページ',['userid'=>Auth::user()->id],['style'=>'font-size:small']) !!}
                    </li>
                    <li class="list-group-item">
                        {!! link_to_route('films.create','管理画面',[],['style'=>'font-size:small']) !!}
                    </li>
                </ul>
            @else
                <ul class="list-group">
                    <li class="list-group-item">
                        {!! link_to_route('users.index','評論家一覧',[],['style'=>'font-size:small']) !!}
                    </li>
                    <li class="list-group-item">
                        {!! link_to_route('critics.index','評論文一覧',[],['style'=>'font-size:small']) !!}
                    </li>
                    <li class="list-group-item">
                        {!! link_to_route('films.index','評論する映画を選ぶ',[],['style'=>'font-size:small']) !!}
                    </li>
                    <li class="list-group-item">
                        {!! link_to_route('logout.get','ログアウト',[],['style'=>'font-size:small']) !!}
                    </li>
                    <li class="list-group-item">
                        {!! link_to_route('critics.mypage',Auth::user()->name.'さんのマイページ',['userid'=>Auth::user()->id],['style'=>'font-size:small']) !!}
                    </li>
                </ul>    
            @endif
            @else
                <ul class="list-group">
                    <li class="list-group-item">
                        {!! link_to_route('users.index','評論家一覧',[],['style'=>'font-size:small']) !!}
                    </li>
                    <li class="list-group-item">
                        {!! link_to_route('critics.index','評論文一覧',[],['style'=>'font-size:small']) !!}
                    </li>
                    <li class="list-group-item">
                        {!! link_to_route('films.index','評論する映画を選ぶ',[],['style'=>'font-size:small']) !!}
                    </li>
                    <li class="list-group-item">
                        {!! link_to_route('signup.get','新規登録',[],['style'=>'font-size:small']) !!}
                    </li>
                    <li class="list-group-item">
                        {!! link_to_route('login','ログイン',[],['style'=>'font-size:small']) !!}
                    </li>
                </ul>  
        @endif    
        </div>
        
        <div class="col-sm-9 border">
            <div class="border">
                <h3 class="p-3" style="font-size:20px">映画評論家's Roomへようこそ</h3>
                <section class="p-3">
                    <p>映画好きのための映画評論サイトです。</p>
                     <p>1つの映画に対して</p>
                    <ul>
                        <li>脚本</li>
                        <li>撮影</li>
                        <li>編集</li>
                        <li>美術</li>
                        <li>演技</li>
                        <li>音楽</li>
                        <li>作品テーマ</li>
                        <li>キャスティング</li>
                    </ul>
                    <p>という8個の項目に分けて評論ができます。</p>
                    <br>
                    <p>
                        映画というものは様々な観客の様々な解釈や批評によって成熟し語り継がれていきます。
                        様々な解釈や批評が語り尽くされて初めてその作品が完成したと言えるでしょう。
                        このサイトを通じてみなさまも是非お気に入りの映画を完成に近づけてみませんか？
                        
                    </p>
                    
                </section>
            </div>
            <?php $critics = App\Critic::orderBy('created_at', 'desc')->paginate(10); ?>
            <div class="border mt-3">
                <h3 class="p-3" style="font-size:20px">新着評論情報</h3>
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                              
                              <th scope="col" style="font-size:13px">映画タイトル</th>
                              <th scope="col" style="font-size:13px">評論した人</th>
                              <th scope="col" style="font-size:13px">評論タイトル</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                               @foreach($critics as $critic)
                              
                              <td style="font-size:13px">{{ $critic->film()->first()->title }}</td>
                              <td style="font-size:13px">{!! link_to_route('critics.mypage',$critic->user()->first()->name,['userid'=>$critic->user()->first()->id]) !!}</td>
                              <td style="font-size:13px">{!! link_to_route('critics.show',$critic->title ,['critic'=>$critic->id]) !!}</td>
                            </tr>
                           @endforeach
                        </tbody>
                    </table>
            </div>
        </div>
    </div>    
@endsection