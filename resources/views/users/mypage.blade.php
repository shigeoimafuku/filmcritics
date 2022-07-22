@extends('layouts.app')

@section('content')

<h2 class="border border-dark rounded p-2 mb-5 d-flex justify-content-between" style="font-size:20px;">{{ $me->name }}さんのページ
<span style="font-size:15px">{!! link_to_route('users.followings',$me->followings_count,['id'=>$me->id]) !!}フォロー　
{!! link_to_route('users.followers',$me->followers_count,['id'=>$me->id]) !!}フォロワー</span></h2>
    <div class="pl-3 mb-5 border-bottom border-dark">映画評論一覧</div>
    
         <table class="table">
            <thead class="thead-dark">
                <tr>
                  
                  <th scope="col" style="font-size:13px">映画タイトル</th>
                  {{-- <th scope="col" style="font-size:13px">評論した人</th> --}}
                  <th scope="col" style="font-size:13px">評論タイトル</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                   @foreach($critics as $critic)
                  
                  <td style="font-size:13px">{!! link_to_route('critics.show',$critic->film()->first()->title ,['critic'=>$critic->id]) !!}</td>
                  <td style="font-size:13px">「{{ $critic->title }}」</td>
                 
                </tr>
               @endforeach
               
            </tbody>
        </table>
        {{ $critics->links() }}
@endsection      