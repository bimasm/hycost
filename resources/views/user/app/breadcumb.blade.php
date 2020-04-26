<div>
	<nav class="bread-hy">
		<div class="nav-wrapper">
			<div class="col s12">

				{{-- Forum --}}
				@if(request()->routeIs('UserDashboardForum'))
				<a href="#!" class="breadcrumb bread-hy-c">Dashboard Forum</a>
				@endif

				@if(request()->routeIs('UserPostSemuaForum'))
				<a href="{{route('UserPostSemuaForum')}}" class="breadcrumb bread-hy-c">Post</a>
				@endif

				@if(request()->routeIs('UserPostAddNewPost'))
				<a href="#!" class="breadcrumb bread-hy-c">Post Baru</a>
				@endif

				@if(request()->routeIs('UserKomentarSemua'))
				<a href="#!" class="breadcrumb bread-hy-c">Komentar</a>
				@endif

				@if(request()->routeIs('UserSetting'))
				<a href="#!" class="breadcrumb bread-hy-c">Setting</a>
				@endif

				{{-- Monitoring --}}
				@if(request()->routeIs('UserDashboardMonitor'))
				<a href="#!" class="breadcrumb bread-hy-c">Dashboard Monitoring</a>
				@endif

				@if(request()->routeIs('UserSemuaLabelMonitor'))
				<a href="#!" class="breadcrumb bread-hy-c">Label</a>
				@endif

				@if(request()->routeIs('UserLabelAddNewMonitor'))
				<a href="#!" class="breadcrumb bread-hy-c">Tambah Label Baru</a>
				@endif

				@if(request()->routeIs('UserLabelCariNewMonitor'))
				<a href="#!" class="breadcrumb bread-hy-c">Cari Label Baru</a>
				@endif

				@if(request()->routeIs('UserSemuaKebunMonitor'))
				<a href="#!" class="breadcrumb bread-hy-c">Kebun</a>
				@endif

			</div>
		</div>
	</nav>
</div>