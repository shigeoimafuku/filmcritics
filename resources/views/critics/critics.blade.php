<div class="pl-3 mb-5 border-bottom border-dark">映画評論一覧</div>
@if(count($critics)>0)
   
        
       
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
                  <td style="font-size:13px">{!! link_to_route('users.userpage',$critic->user()->first()->name,['userid'=>$critic->user()->first()->id]) !!}</td>
                  <td style="font-size:13px">{!! link_to_route('critics.show',$critic->title ,['critic'=>$critic->id]) !!}</td>
                </tr>
               @endforeach
            </tbody>
        </table>
        {{ $critics->links() }}
                   
               
        
   
   
@endif
        
  
    