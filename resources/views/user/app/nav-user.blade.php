<header class="mobile-res">
	<div class="navbar">
		<nav class="hy-nav-dashboard" style="box-shadow: none">

			<div class="nav-wrapper container">
				<div class="left">
					<div class="row" style="margin: 0">
						<div class="col s12">
							<a href="#" data-target="sidenav-2" class="left sidenav-trigger hide-on-medium-and-up"><i class="material-icons hy-color-2">menu</i></a>

							{{-- Forum --}}
							@if(request()->routeIs('UserDashboardForum'))
							<a href="#!" class="hide-on-medium-and-up bread-nav">Dashboard Forum</a>
							@endif

							@if(request()->routeIs('UserPostSemuaForum'))
							<a href="{{route('UserPostSemuaForum')}}" class="hide-on-medium-and-up bread-nav">Post</a>
							@endif

							@if(request()->routeIs('UserPostAddNewPost'))
							<a href="#!" class="hide-on-medium-and-up bread-nav">Post Baru</a>
							@endif

							@if(request()->routeIs('UserKomentarSemua'))
							<a href="#!" class="hide-on-medium-and-up bread-nav">Komentar</a>
							@endif

							@if(request()->routeIs('UserSetting'))
							<a href="#!" class="hide-on-medium-and-up bread-nav">Setting</a>
							@endif

							{{-- Monitoring --}}
							@if(request()->routeIs('UserDashboardMonitor'))
							<a href="#!" class="hide-on-medium-and-up bread-nav">Dashboard Monitoring</a>
							@endif

							@if(request()->routeIs('UserSemuaLabelMonitor'))
							<a href="#!" class="hide-on-medium-and-up bread-nav">Label</a>
							@endif

							@if(request()->routeIs('UserLabelAddNewMonitor'))
							<a href="#!" class="hide-on-medium-and-up bread-nav">Tambah Label Baru</a>
							@endif

							@if(request()->routeIs('UserLabelCariNewMonitor'))
							<a href="#!" class="hide-on-medium-and-up bread-nav">Cari Label Baru</a>
							@endif

							@if(request()->routeIs('UserSemuaKebunMonitor'))
							<a href="#!" class="hide-on-medium-and-up bread-nav">Kebun</a>
							@endif

							{{-- <a href="#!" class=" hide-on-medium-and-up">Hycost</a> --}}
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