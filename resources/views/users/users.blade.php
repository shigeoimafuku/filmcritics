@if(count($users)>0)
  @foreach($users as $user)
    
        <div class="card" style="width: 12rem; display:inline-block;">
          <div class="card-body">
            <h5 class="card-title">{{ $user->name }}</h5>
            <h6 class="card-subtitle mb-2 text-muted">投稿数</h6>
            <p>{{ $user->updated_at }}</p>
          </div>
        </div>
       
    
  @endforeach
@endif  
  