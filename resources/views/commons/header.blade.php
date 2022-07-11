<header>
        <div class="row">
            <div class="col-7 border border-dark">
                <a href="/" style="text-decoration:none; color:black;"><h1 class="h3 p-3 text-center">映画評論家's Room</h1></a>
            </div>
            <div class="col-5">
                <nav class="navbar navbar-expand-sm navbar-light mt-4">
                    
                    <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                    {{-- ログイン中の表示 --}}
                    @if (Auth::check())
                      <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ml-auto">
                          <li class="nav-item">
                            {!! link_to_route('logout.get','ログアウト',[],['class'=>'nav-link','style'=>'font-size:12px']) !!}
                          </li>
                          <li class="nav-item">
                            {!! link_to_route('users.mypage',Auth::user()->name,[],['class'=>'nav-link','style'=>'font-size:12px']) !!}
                          </li>
                        </ul>
                      </div>
                    {{-- ログアウト中の表示 --}}
                    @else
                      <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ml-auto">
                          <li class="nav-item">
                            {!! link_to_route('signup.get','新規登録',[],['class'=>'nav-link','style'=>'font-size:12px']) !!}
                          </li>
                          <li class="nav-item">
                            {!! link_to_route('login','ログイン',[],['class'=>'nav-link','style'=>'font-size:12px']) !!}
                          </li>
                        </ul>
                      </div>
                    @endif  
                  </nav>
            </div>
        </div>
        <nav class="navbar navbar-expand-sm navbar-dark bg-dark mt-2 mb-5">
            <a class="navbar-brand" href="/">HOME</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
              <div class="navbar-nav">
                {!! link_to_route('users.index','評論家一覧',[],['class'=>'nav-item nav-link','style'=>'font-size:small']) !!}
                {!! link_to_route('critics.index','評論文一覧',[],['class'=>'nav-item nav-link','style'=>'font-size:small']) !!}
                {!! link_to_route('films.index','評論する映画を選ぶ',[],['class'=>'nav-item nav-link','style'=>'font-size:small']) !!}
              </div>
            </div>
        </nav>

    </header>
