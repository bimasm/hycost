  <div class="navbar-fixed">
    <nav class="hy-nav">
      <div class="nav-wrapper container">
        <a id="logo-container" href="#" class="brand-logo">
          <img src="asset/img/logo-hy.png" class="img-logo">
        </a>
        <a href="#" data-target="nav-mobile" class="sidenav-trigger">
          <i class="material-icons col-menu">menu</i>
        </a>
        <ul class="right hide-on-med-and-down">
          {{-- <li><a class="button-collapse hy-nav-a" href="#beranda">Beranda</a></li>
          <li><a class="button-collapse hy-nav-a" href="#tentang">Tentang Kami</a></li>
          <li><a class="button-collapse hy-nav-a" href="#fitur">Fitur</a></li> --}}
          <li><a class="dropdown-trigger btn hy-btn-bor-ijo-nav" href="#" data-target="dropdown1">{{ Auth::guard('admin')->user()->nama }}</a></li>
        </ul>
      </div>
    </nav>
  </div>

  <ul id="nav-mobile" class="sidenav">
    <li><a href="#beranda">Beranda</a></li>
    <li><a href="#tentang">Tentang Kami</a></li>
    <li><a href="#fitur">Fitur</a></li>
  </ul>

  <div id="dropdown1" class="dropdown-content" style="width: 250px;">
    <div class="drop-akun">
      <div class="drop-akun-icon">
        <i class="material-icons rb-text-1 center" style="font-size: 50px;">account_circle</i>
      </div>

      <div class="center drop-name">
        <b><p>{{ Auth::guard('admin')->user()->nama }}</p></b>
      </div>
    </div>

    <div class="divider" tabindex="-1"></div>

    <div class="center">
      <a href="/logout" class="waves-effect waves-teal btn hy-btn-bor-ijo">Logout</a>
    </div>
  </div>