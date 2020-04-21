<div>
	<nav class="bread-hy">
		<div class="nav-wrapper">
			<div class="col s12">
<<<<<<< HEAD

				{{-- Forum --}}
=======
>>>>>>> ec04a23068213a39e0ef0b95d16e12bcb2418607
				@if(request()->routeIs('UserDashboardForum'))
				<a href="#!" class="breadcrumb bread-hy-c">Dashboard Forum</a>
				@endif

				@if(request()->routeIs('UserPostSemuaForum'))
<<<<<<< HEAD
				<a href="{{route('UserPostSemuaForum')}}" class="breadcrumb bread-hy-c">Post</a>
				@endif

				@if(request()->routeIs('UserPostAddNewPost'))
				<a href="{{route('UserPostSemuaForum')}}" class="breadcrumb bread-hy-c">Post</a>
=======
				<a href="#!" class="breadcrumb bread-hy-c">Post</a>
				<a href="#!" class="breadcrumb bread-hy-c">Semua Post</a>
				@endif

				@if(request()->routeIs('UserPostAddNewPost'))
				<a href="#!" class="breadcrumb bread-hy-c">Post</a>
>>>>>>> ec04a23068213a39e0ef0b95d16e12bcb2418607
				<a href="#!" class="breadcrumb bread-hy-c">Post Baru</a>
				@endif

				@if(request()->routeIs('UserKomentarSemua'))
				<a href="#!" class="breadcrumb bread-hy-c">Komentar</a>
				@endif

				@if(request()->routeIs('UserSetting'))
				<a href="#!" class="breadcrumb bread-hy-c">Setting</a>
				@endif
<<<<<<< HEAD

				{{-- Monitoring --}}
				@if(request()->routeIs('UserDashboardMonitor'))
				<a href="#!" class="breadcrumb bread-hy-c">Dashboard Monitoring</a>
				@endif

				@if(request()->routeIs('UserSemuaLabelMonitor'))
				<a href="#!" class="breadcrumb bread-hy-c">Label</a>
				<a href="#!" class="breadcrumb bread-hy-c">Semua Label</a>
				@endif

				@if(request()->routeIs('UserLabelAddNewMonitor'))
				<a href="#!" class="breadcrumb bread-hy-c">Label</a>
				<a href="#!" class="breadcrumb bread-hy-c">Tambah Label Baru</a>
				@endif

=======
>>>>>>> ec04a23068213a39e0ef0b95d16e12bcb2418607
			</div>
		</div>
	</nav>
</div>