<header class="web-res">
	<div class="navbar">
		<nav class="hy-nav-dashboard" style="box-shadow: none">

			<div class="nav-wrapper container">
				<ul class="left hide-on-med-and-down">
					<li>
						<a href="{{ URL::previous() }}" class='waves-effect btn-flat hy-btn-flat-2'><i class="material-icons left">keyboard_arrow_left</i>Kembali</a>
					</li>
				</ul>
			</div>

		</nav>
	</div>
</header>

<header class="mobile-res">
	<div class="navbar">
		<nav class="hy-nav-dashboard" style="box-shadow: none">

			<div class="nav-wrapper container">
				<div class="left">
					<div class="row" style="margin: 0">
						<div class="col s12">
							<a href="{{ URL::previous() }}" class="left sidenav-trigger hide-on-medium-and-up"><i class="material-icons hy-color-2">keyboard_arrow_left</i></a>

							{{-- Forum --}}
							@if(request()->routeIs('UserPostAddNewPost'))
							<a href="#!" class="hide-on-medium-and-up bread-nav">Tambah Post Baru</a>
							@endif

							@if(request()->routeIs('UserLabelAddNewMonitor'))
							<a href="#!" class="hide-on-medium-and-up bread-nav">Tambah Label Baru</a>
							@endif

							@if(request()->routeIs('UserLabelCariNewMonitor'))
							<a href="#!" class="hide-on-medium-and-up bread-nav">Cari Label Baru</a>
							@endif

						</div>
					</div>
				</div>
				<div class="right">
					<div class="row" style="margin: 0">
						<div class="col s12">
						</div>
					</div>
				</div>
			</div>

		</nav>
	</div>
</header>