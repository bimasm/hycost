<div class="bread-hy-cont">
	<nav class="bread-hy">
		<div class="nav-wrapper">
			<div class="col s12">
				@if(request()->routeIs('UserDashboardForum'))
				<a href="#!" class="breadcrumb bread-hy-c">Dashboard Forum</a>
				@endif

				@if(request()->routeIs('UserPostSemuaForum'))
				<a href="#!" class="breadcrumb bread-hy-c">Post</a>
				@endif
			</div>
		</div>
	</nav>
</div>