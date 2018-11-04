
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>     
    </ul>
    <ul class="navbar-nav pull-xs-right">
        @if (Route::has('login'))
            @if (Auth::check())            
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img src="{{asset('image/username/'.Auth::user()->avatar)}}" class="img-avatar-header" alt="{{Auth::user()->avatar}}">
                 {{ Auth::user()->name }}
                </a>
                <div class="dropdown-menu user-detalles" aria-labelledby="navbarDropdown">
                <a class="dropdown-item"  href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();">
                {{Lang::get('auth.logout')}}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                </form>
                <a class="dropdown-item" href="{{ route('user.edit',['user'=> Auth::user()->id]) }}">{!! Lang::get('header.user.edit') !!}</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>
            @else
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/login') }}">Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/register') }}">Register</a>
            </li>
            @endif                
        @endif
    </ul>
  </div>
</nav>

