@extends('aapp.app')

@section('title')
Setting User
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

					<div class="col s12 m12 l10">
						<div class="card card-hy-f">
							<div class="card-content">
								<span class="card-title card-title-hy-f">Profile</span>
							</div>

							<div class="card-content" style="padding: 0">
								<div class="collection collect-pp collect-nb">

									<a href="#edit-foto" class="collection-item modal-trigger">
										<div class="row valign-wrapper-hy">
											<div class="col s6 left-align title">Foto</div>
											<div class="col s6 right-align valign">
												<img src="https://materializecss.com/images/yuna.jpg" style="width: 60px; border-radius: 50%">
											</div>
										</div>
									</a>
									<a href="#edit-nama" class="collection-item modal-trigger">
										<div class="row">
											<div class="col s14 title">Nama</div>
											<div class="col s14">Nama User</div>
											<div class="col s14 icon">
												<div class="secondary-content">
													<i class="material-icons">keyboard_arrow_right</i>
												</div>
											</div>
										</div>
									</a>
									<a href="#edit-jeniskelamin" class="collection-item modal-trigger">
										<div class="row">
											<div class="col s14 title">Jenis Kelamin</div>
											<div class="col s14">Laki-laki</div>
											<div class="col s14 icon">
												<div class="secondary-content">
													<i class="material-icons">keyboard_arrow_right</i>
												</div>
											</div>
										</div>
									</a>
									<a href="#edit-password" class="collection-item akhir modal-trigger">
										<div class="row">
											<div class="col s14 title">Password</div>
											<div class="col s14">Password User</div>
											<div class="col s14 icon">
												<div class="secondary-content">
													<i class="material-icons">keyboard_arrow_right</i>
												</div>
											</div>
										</div>
									</a>
								</div>
							</div>
						</div>
					</div>

					<div class="col s12 m12 l10">
						<div class="card card-hy-f">
							<div class="card-content">
								<span class="card-title card-title-hy-f">Kontak</span>
							</div>

							<div class="card-content" style="padding: 0">
								<div class="collection collect-pp collect-nb">

									<a href="#edit-email" class="collection-item modal-trigger">
										<div class="row">
											<div class="col s14 title">Email</div>
											<div class="col s14">email user</div>
											<div class="col s14 icon">
												<div class="secondary-content">
													<i class="material-icons">keyboard_arrow_right</i>
												</div>
											</div>
										</div>
									</a>

									<a href="#edit-notelepon" class="collection-item akhir modal-trigger">
										<div class="row">
											<div class="col s14 title">Nomor Telepon</div>
											<div class="col s14">nomor telepon</div>
											<div class="col s14 icon">
												<div class="secondary-content">
													<i class="material-icons">keyboard_arrow_right</i>
												</div>
											</div>
										</div>
									</a>
									
								</div>
							</div>
						</div>
					</div>


				</div>
			</div>

		</div>
	</div>
</section>

@include('user.app.modal-setting')
@endsection