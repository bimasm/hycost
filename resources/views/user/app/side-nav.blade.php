<ul id="slide-out" class="sidenav sidenav-hy-tools">
	<li>
		<div class="row valign-wrapper">
			<div class="col s12 m12 l3 valign">
				<a class="btn-floating waves-effect transparent hy-btn-side-icon sidenav-close"><i class="material-icons grey-text text-darken-1">keyboard_arrow_left</i></a>
			</div>
			<div class="col s12 m12 l9"><h5>Akun anda</h5></div>
		</div>
	</li>
	<li>
		<div class="row">
			<div class="col s12 m12 l4"></div>
			<div class="col s12 m12 l8">
				<h6>Ivan Priyambudi</h6>
				<h6>Email.com</h6>
			</div>
		</div>
	</li>
	<li><div class="divider"></div></li>
	<li><a href="{{route('UserSetting')}}"><i class="material-icons">settings</i>Setting</a></li>
	<li><div class="divider"></div></li>
	<li><a href="/logout"><i class="material-icons">power_settings_new</i>Logout</a></li>
</ul>

<ul id="slide-out-2" class="sidenav sidenav-hy-tools notif">
	<li>
		<div class="row valign-wrapper">
			<div class="col s12 m12 l3 valign">
				<a class="btn-floating waves-effect transparent hy-btn-side-icon sidenav-close"><i class="material-icons grey-text text-darken-1">keyboard_arrow_left</i></a>
			</div>
			<div class="col s12 m12 l9"><h5>Notifikasi</h5></div>
		</div>
	</li>
	<li>
		<div class="collection">
			<div class="collection-item"><span class="new badge" style="margin: 0">4</span>Notifikasi Terbaru</div>
		</div>
	</li>

	<li class="item-belum">
		<a href="#!" class="notif">
			<div class="card card-hy-f">
				<div class="card-content">
					<div class="row">
						<div class="col s12 m3 icon-notif"></div>
						<div class="col s12 m9 text-notif">
							<p>Izha mengomentari Post anda</p>
							<div class="time">
								10 menit yang lalu
							</div>
						</div>
					</div>
				</div>
			</div>
		</a>
	</li>

	<li class="item-sudah">
		<a href="#!" class="notif">
			<div class="card card-hy-f">
				<div class="card-content">
					<div class="row">
						<div class="col s12 m3 icon-notif"></div>
						<div class="col s12 m9 text-notif">
							<p>Izha mengomentari Post anda</p>
							<div class="time">
								10 menit yang lalu
							</div>
						</div>
					</div>
				</div>
			</div>
		</a>
	</li>

</ul>

<ul id="slide-out-3" class="sidenav sidenav-hy-tools tambah">
	<li>
		<div class="row valign-wrapper">
			<div class="col s12 m12 l3 valign">
				<a class="btn-floating waves-effect transparent hy-btn-side-icon sidenav-close"><i class="material-icons grey-text text-darken-1">keyboard_arrow_left</i></a>
			</div>
			<div class="col s12 m12 l9"><h5>Tambah Sesuatu</h5></div>
		</div>
	</li>
	<li><a class="subheader">Forum</a></li>
	<li>
		<a href="{{route('UserPostAddNewPost')}}" class="waves-effect waves-light btn-large btn-sidenav-tambah"><i class="material-icons left">library_books</i>Post</a>
	</li>
	<li><a class="subheader">Monitoring</a></li>
	<li>
		<a class="waves-effect waves-light btn-large btn-sidenav-tambah"><i class="material-icons left">label</i>Kebun</a>
	</li>
	<li>
		<a href="{{route('UserLabelAddNewMonitor')}}" class="waves-effect waves-light btn-large btn-sidenav-tambah"><i class="material-icons left">trip_origin</i>Label</a>
	</li>
</ul>



<div id="sidenav-2" class="sidenav nav-gab">

	{{--//- START -///////////////////////////////////////////////////////////////////////////////// SIDENAV SECOND --}}
	<ul id="sidenav-2" class="nav-1 sidenav sidenav-second sidenav-fixed sidenav-hy-2 noselect animated fadeIn faster">
		<li class="
		{{ (request()->routeIs(

			'UserDashboardForum',

			)) ? 'active' : '' }}
			">
			<a class="tooltipped" data-position="right" data-tooltip="Dashboard Forum" href="{{route('UserDashboardForum')}}"><i class="material-icons">forum</i></a>
		</li>
		<li class="
		{{ (request()->routeIs(

			'UserDashboardMonitor'

			)) ? 'active' : '' }}
			">
			<a class="tooltipped" data-position="right" data-tooltip="Dashboard Monitoring" href="{{route('UserDashboardMonitor')}}"><i class="material-icons">devices</i></a>
		</li>
		<li class="">
			<a data-target="slide-out-3" class="tooltipped sidenav-trigger" data-position="right" data-tooltip="Tambahkan Sesuatu" href="#!"><i class="material-icons">add</i></a>
		</li>
		<li class="">
			<a data-target="slide-out-2" class="tooltipped sidenav-trigger" data-position="right" data-tooltip="Notifikasi" href="#!"><i class="material-icons">notifications</i></a>
		</li>
		<li class=" 
		{{ (request()->routeIs(

			'UserSetting'

			)) ? 'active' : '' }}
			">
			<a data-target="slide-out" class="tooltipped sidenav-trigger" data-position="right" data-tooltip="Akun anda" href="#!"><i class="material-icons">account_circle</i></a>
		</li>
	</ul>
	{{--//- END -///////////////////////////////////////////////////////////////////////////////// SIDENAV SECOND --}}




	{{--//- START -///////////////////////////////////////////////////////////////////////////////// SIDENAV ONE --}}
	<ul id="sidenav-2" class="nav-2 sidenav sidenav-fixed sidenav-hy-1 noselect animated fadeIn faster">

		<li><div class="sidenav-title">Hycost</div></li>

		{{--//- START -////////////////////////////////////////////////////////////////////////// SIDENAV MONITORING --}}
		@if(request()->routeIs('UserDashboardMonitor','UserSemuaLabelMonitor','UserLabelAddNewMonitor'))
		<li><a class="subheader">Dashboard Monitoring</a></li>

		<li class="
		{{ (request()->routeIs(

			'UserDashboardMonitor'

			)) ? 'active' : '' }}
			">
			<a href="{{route('UserDashboardMonitor')}}"><i class="material-icons">dashboard</i>Dashboard</a>
		</li>
		<li>
			<ul class="collapsible">
				<li class="
				{{ (request()->routeIs(

					'UserSemuaLabelMonitor',
					'UserLabelAddNewMonitor'

					)) ? 'active' : '' }}
					">
					<div class="collapsible-header"><i class="material-icons">label</i>Label<i class="material-icons right">arrow_forward_ios</i></div>
					<div class="collapsible-body">
						<ul>
							<li class="
							{{ (request()->routeIs(

								'UserSemuaLabelMonitor'

								)) ? 'active' : '' }}
								">
								<a href="{{route('UserSemuaLabelMonitor')}}">Semua Label</a>
							</li>
							<li class="
							{{ (request()->routeIs(

								'UserLabelAddNewMonitor'

								)) ? 'active' : '' }}
								">
								<a href="{{route('UserLabelAddNewMonitor')}}">Tambah Label</a>
							</li>
							<li><a href="#!">Cari Label</a></li>
						</ul>
					</div>
				</li>
			</ul>
		</li>
		<li>
			<ul class="collapsible">
				<li>
					<div class="collapsible-header"><i class="material-icons">trip_origin</i>Kebun<i class="material-icons right">arrow_forward_ios</i></div>
					<div class="collapsible-body">
						<ul>
							<li><a href="#!">Semua Kebun</a></li>
							<li><a href="#!">Tambah Kebun</a></li>
						</ul>
					</div>
				</li>
			</ul>
		</li>

		@endif
		{{--//- END -///////////////////////////////////////////////////////////////////////// SIDENAV MONITORING --}}







		{{--//- START -//////////////////////////////////////////////////////////////////////////// SIDENAV FORUM --}}
		@if(request()->routeIs('UserDashboardForum','UserPostSemuaForum','UserPostAddNewPost','UserKomentarSemua','UserSetting'))
		<li><a class="subheader">Dashboard Forum</a></li>
		<li class="
		{{ (request()->routeIs(

			'UserDashboardForum',

			)) ? 'active' : '' }}
			">
			<a href="{{route('UserDashboardForum')}}"><i class="material-icons">dashboard</i>Dashboard</a>
		</li>
		<li class="
		{{ (request()->routeIs(

			'UserPostSemuaForum',
			'UserPostAddNewPost'

			)) ? 'active' : '' }}
			">
			<a href="{{route('UserPostSemuaForum')}}"><i class="material-icons">library_books</i>Post</a>
		</li>
		<li class="
		{{ (request()->routeIs(

			'UserKomentarSemua'

			)) ? 'active' : '' }}
			">
			<a href="{{route('UserKomentarSemua')}}"><i class="material-icons">insert_comment</i>Komentar</a>
		</li>
		@endif
		{{--//- END -//////////////////////////////////////////////////////////////////////////// SIDENAV FORUM --}}
	</ul>
	{{--//- END -///////////////////////////////////////////////////////////////////////////////// SIDENAV ONE --}}

</div>