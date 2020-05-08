  <div class="navbar-fixed">
    <nav class="hy-nav">
      <div class="nav-wrapper container">
        <a id="logo-container" href="/" class="brand-logo">
          <img src="{{asset('asset/img/logo-hy.png')}}" class="img-logo">
        </a>
        <a href="#" data-target="nav-mobile" class="sidenav-trigger">
          <i class="material-icons col-menu">menu</i>
        </a>
        <ul class="right hide-on-med-and-down">

          @if(request()->routeIs('login-page','regis'))
          <li><a class="button-collapse hy-nav-a" href="/">Beranda</a></li>
          @else
          <li><a class="button-collapse hy-nav-a" href="#beranda">Beranda</a></li>
          <li><a class="button-collapse hy-nav-a" href="#tentang">Tentang Kami</a></li>
          <li><a class="button-collapse hy-nav-a" href="#fitur">Fitur</a></li>
          <li><a class="button-collapse hy-nav-a" href="{{route('UserLandingForum')}}">Forum</a></li>
          
          @if (Auth::guard('user'))
          @auth('user')
          <li><a href="/user" class="waves-effect waves-light btn hy-btn-bor-ijo-nav">Dashboard</a></li>
          @else
         <li><a href="/login" class="waves-effect waves-light btn hy-btn-bor-ijo-nav">Masuk</a></li>
          @endauth
          @endif
          
          @endif
        </ul>
      </div>
    </nav>
  </div>

  <ul id="nav-mobile" class="sidenav">
    <li><a href="#beranda">Beranda</a></li>
    <li><a href="#tentang">Tentang Kami</a></li>
    <li><a href="#fitur">Fitur</a></li>
    <li><a href="{{route('UserLandingForum')}}">Forum</a></li>
  </ul>