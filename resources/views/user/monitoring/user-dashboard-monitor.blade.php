@extends('aapp.app')

@section('title')
Dashboard Monitor User
@endsection

@section('nav-user')
@include('user.app.nav-user')  
@endsection

@section('sidenav-user')
@include('user.app.side-nav')
@endsection

@section('content-user')
<section>
	<div class="content-hy-dash">
		<div class="container cont-hy-dash">

			{{-- Start Header --}}
			<div class="row bread-hy-cont animated fadeIn faster">
				<div class="col s12 m12 l5">
					{{-- Start Breadcumb --}}
					@include('user.app.breadcumb')
					{{-- End Breadcumb --}}
				</div>
			</div>
			{{-- End Header --}}

			<div class="cont-hy-dash-all animated fadeIn faster">
				<div class="row">

					@include('user.app.alert-to-premium')

					<div class="col s12 m12 l4">
						<div class="card card-hy-f">
							<div class="card-content">
								<div class="row">
									<div class="col s12 m12 l4">

									</div>
									<div class="col s12 m12 l8">
										<span class="card-title card-title-hy-f">Nama Kebun</span>
										<ul class="collection colection-hy-f">
											<li class="collection-item colect-hy-f">Status
												<div class="secondary-content-hy-f">Online</div>
											</li>
											<li class="collection-item colect-hy-f">Label
												<div class="secondary-content-hy-f">Label 1</div>
											</li>
										</ul>
									</div>
								</div>
							</div>

							<div class="card-link-hy-f">
								<a href="#!">
									<div class="card-action card-action-hy-f">
										Lihat Kebun
									</div>
								</a>
							</div>
						</div>
					</div>

				</div>
			</div>

		</div>
	</div>
</section>
@endsection