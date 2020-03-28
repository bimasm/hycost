<ul id="sidenav-1" class="sidenav sidenav-fixed sidenav-hy noselect animated fadeIn faster">

	{{--//START//----------------------------------------------------------------------------------------- sidenav monitoring --}}

	{{-- <li><a class="subheader">Monitoring</a></li>
	<li class="active"><a href="#!"><i class="material-icons">dashboard</i>Dashboard</a></li>
	<li>
		<ul class="collapsible">
			<li>
				<div class="collapsible-header"><i class="material-icons">label</i>Label<i class="material-icons right">arrow_forward_ios</i></div>
				<div class="collapsible-body">
					<ul>
						<li><a href="#!">Semua Label</a></li>
						<li><a href="#!">Tambah Label Baru</a></li>
						<li><a href="#!">Cari Label</a></li>
					</ul>
				</div>
			</li>
		</ul>
	</li>
	<li>
		<ul class="collapsible">
			<li>
				<div class="collapsible-header"><i class="material-icons">assessment</i>Monitoring<i class="material-icons right">arrow_forward_ios</i></div>
				<div class="collapsible-body">
					<ul>
						<li><a href="#!">Suhu Air</a></li>
						<li><a href="#!">Suhu Ruangan</a></li>
						<li><a href="#!">Kandungan Air</a></li>
						<li><a href="#!">Volume Air</a></li>
					</ul>
				</div>
			</li>
		</ul>
	</li> --}}

	{{--//END//----------------------------------------------------------------------------------------- sidenav monitoring --}}

	{{--//START//----------------------------------------------------------------------------------------- sidenav forum --}}
	@if(request()->routeIs('UserDashboardForum','UserPostSemuaForum','UserPostAddNewPost','UserKomentarSemua','UserSetting'))
	<li><a class="subheader">Forum</a></li>
	<li class="
	{{ (request()->routeIs(

		'UserDashboardForum'

		)) ? 'active' : '' }}
		">
		<a href="{{route('UserDashboardForum')}}"><i class="material-icons">dashboard</i>Dashboard</a>
	</li>
	<li>
		<ul class="collapsible">
			<li class="
			{{ (request()->routeIs(

				'UserPostSemuaForum',
				'UserPostAddNewPost'

				)) ? 'active' : '' }}
				">
				<div class="collapsible-header"><i class="material-icons">library_books</i>Post<i class="material-icons right">arrow_forward_ios</i></div>
				<div class="collapsible-body">
					<ul>
						<li class="
						{{ (request()->routeIs(

							'UserPostSemuaForum'

							)) ? 'active' : '' }}
							">
							<a href="{{route('UserPostSemuaForum')}}">Semua Post</a>
						</li>
						<li class="
						{{ (request()->routeIs(

							'UserPostAddNewPost'

							)) ? 'active' : '' }}
							">
							<a href="{{route('UserPostAddNewPost')}}">Tambah Post Baru</a>
						</li>
					</ul>
				</div>
			</li>
		</ul>
	</li>
	<li class="
	{{ (request()->routeIs(

		'UserKomentarSemua'

		)) ? 'active' : '' }}
		">
		<a href="{{route('UserKomentarSemua')}}"><i class="material-icons">insert_comment</i>Komentar</a>
	</li>
	{{--//END//----------------------------------------------------------------------------------------- sidenav forum --}}

	<li><a class="subheader">Akun</a></li>
	@endif
	{{-- <li>
		<ul class="collapsible">
			<li>
				<div class="collapsible-header"><i class="material-icons">trip_origin</i>Kebun<i class="material-icons right">arrow_forward_ios</i></div>
				<div class="collapsible-body">
					<ul>
						<li><a href="#!">Semua Kebun</a></li>
						<li><a href="#!">Tambah Kebun Baru</a></li>
					</ul>
				</div>
			</li>
		</ul>
	</li> --}}
	@if(request()->routeIs('UserDashboardForum','UserPostSemuaForum','UserPostAddNewPost','UserKomentarSemua','UserSetting'))
	<li class="
	{{ (request()->routeIs(

		'UserSetting'

		)) ? 'active' : '' }}
		">
		<a href="{{route('UserSetting')}}"><i class="material-icons">settings</i>Setting</a>
	</li>
	@endif
</ul>