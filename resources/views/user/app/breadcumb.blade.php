<div>
	<nav class="bread-hy">
		<div class="nav-wrapper">
			<div class="col s12">
				@if(request()->routeIs('UserDashboardForum'))
				<a href="#!" class="breadcrumb bread-hy-c">Dashboard Forum</a>
				@endif

				@if(request()->routeIs('UserPostSemuaForum'))
				<a href="#!" class="breadcrumb bread-hy-c">Post</a>
				<a href="#!" class="breadcrumb bread-hy-c">Semua Post</a>
				@endif

				@if(request()->routeIs('UserPostAddNewPost'))
				<a href="#!" class="breadcrumb bread-hy-c">Post</a>
				<a href="#!" class="breadcrumb bread-hy-c">Post Baru</a>
				@endif

				@if(request()->routeIs('UserKomentarSemua'))
				<a href="#!" class="breadcrumb bread-hy-c">Komentar</a>
				@endif

				@if(request()->routeIs('UserSetting'))
				<a href="#!" class="breadcrumb bread-hy-c">Setting</a>
				@endif
			</div>
		</div>
	</nav>
</div>