
<nav class="navbar navbar-expand navbar-dark dusty-grass-gradient">

  <a class="navbar-brand" href="/"><i class="fas fa-golf-ball mr-1"></i>ショートコース大全</a>
  
  <ul class="navbar-nav ml-auto">
    
    @if( Auth::id() === 1 )
    <li class="nav-item">
      <a class="nav-link" href="{{ route('course.create') }}">作成</a>
    </li>
    @endif

    @guest
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown"
         aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-user-circle"></i>
      </a>
      <div class="dropdown-menu dropdown-menu-right dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
        <button class="dropdown-item" type="button"
                onclick="location.href='{{route('register')}}'">
          ユーザ登録
        </button>
      </div>
    </li>
    @endguest

    @guest
    <li class="nav-item">
      <a class="nav-link" href="{{route('login')}}">ログイン</a>
    </li>
    @endguest

    @auth
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown"
         aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-user-circle"></i>
      </a>
      <div class="dropdown-menu dropdown-menu-right dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
        <button class="dropdown-item" type="button"
                onclick="location.href='{{ route("myinfo.show",['myinfo' => Auth::id()]) }}'">
          マイページ
        </button>
        <div class="dropdown-divider"></div>
        <button form="logout-button" class="dropdown-item" type="submit">
          ログアウト
        </button>
      </div>
    </li>
    <form id="logout-button" method="POST" action="{{route('logout')}}">
      @csrf
    </form>
    @endauth
    
  </ul>
  

</nav>