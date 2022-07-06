<h2 class="border border-dark rounded p-2 mb-5" style="font-size:20px;">{{ $critic -> user($critic -> user_id)->first()->name }}さんのページ</h2>
    <h3 class="pl-3 border-bottom border-dark">「{{ $critic->film($critic->film_id)->first()->title }}」</h3>
        <ul class="nav nav-tabs mt-5">
          <li class="nav-item">
            <a href="{{ route('critics.show',['critic'=>$critic->id]) }}" class="nav-link {{ Request::routeIs('critics.show') ? 'active' : '' }}">
                タイトル
            </a>    
          </li>
          <li class="nav-item">
            <a href="{{ route('critics.show',['critic'=>$critic->id]) }}" class="nav-link {{ Request::routeIs('critics.show') ? 'active' : '' }}">
                
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
          </li>
        </ul>