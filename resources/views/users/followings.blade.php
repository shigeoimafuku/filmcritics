@extends ('layouts.app')

@section('content')

<div class="pl-3 mb-5 border-bottom border-dark">{{ $user->name }}さんがフォロー中</div>
@if (count($followings)>0)

<table class="table">
            <thead class="thead-dark">
                <tr>
                  
                  <th scope="col" style="font-size:15px">名前</th></th>
                  
                  <th scope="col" style="font-size:15px">評論数</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                   @foreach($followings as $following)
                  
                  <td style="font-size:15px">{!! link_to_route('users.userpage',$following->name,['userid'=>$following->id]) !!}</td>
                  <td style="font-size:15px">{{ $following->critics()->count() }}個の評論を書いてます</td>
                 
                </tr>
               @endforeach
            </tbody>
        </table>
    


@endif

@endsection