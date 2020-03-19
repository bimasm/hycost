@extends('aapp.app')

@section('title')
Dashboard Forum User
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

			{{--  Start Breadcumb --}}
			@include('user.app.breadcumb')
			{{--  End Breadcumb --}}

			<div class="cont-hy-dash-all">
				<div class="row">

					<div class="col s12 m12 l12">
						<div class="alert-hy">
							<div class="alert">
								<span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
								<div class="row no-mar">
									<div class="col s12 m12 l2">a</div>
									<div class="col s12 m12 l8">
										<div class="cont-alert-hy">
											Sekarang anda masih menggunakan Akun Reguler, aktifkan Akun Premium untuk mendapatkan layanan Monitoring Kebun Hidroponik anda dengan cepat dan mudah.
										</div>
										<a class="waves-effect waves-light btn" style="background-color: #56b2b2">Pasang Perangkat Sekarang</a>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col s12 m12 l6">
						<div class="card card-hy-f">
							<div class="card-content">
								<div class="row">
									<div class="col s12 m12 l8">
										<span class="card-title card-title-hy-f">Post</span>
										<ul class="collection colection-hy-f">
											<li class="collection-item colect-hy-f">Post Terbit<div class="secondary-content-hy-f">10 Post</div></li>
											<li class="collection-item colect-hy-f">Post Pending<div class="secondary-content-hy-f">1 Post</div></li>
											<li class="collection-item colect-hy-f">Post Dihapus<div class="secondary-content-hy-f">1 Post</div></li>
										</ul>
									</div>
									<div class="col s12 m12 l4"></div>
								</div>
							</div>

							<div class="card-link-hy-f">
								<a href="#!">
									<div class="card-action card-action-hy-f">
										Lihat Semua Post
									</div>
								</a>
							</div>
						</div>
					</div>

					<div class="col s12 m12 l6">
						<div class="card card-hy-f">
							<div class="card-content">
								<div class="row">
									<div class="col s12 m12 l8">
										<span class="card-title card-title-hy-f">Komentar</span>
										<ul class="collection colection-hy-f">
											<li class="collection-item colect-hy-f">Belum dibaca
												<div class="secondary-content-hy-f">2</div>
											</li>
											<li class="collection-item colect-hy-f">Balasan Terbit
												<div class="secondary-content-hy-f">2</div>
											</li>
											<li class="collection-item colect-hy-f">Total Komentar
												<div class="secondary-content-hy-f">10</div>
											</li>
										</ul>
									</div>
									<div class="col s12 m12 l4"></div>
								</div>
							</div>

							<div class="card-link-hy-f">
								<a href="#!">
									<div class="card-action card-action-hy-f">
										Lihat Semua Komentar
									</div>
								</a>
							</div>
						</div>
					</div>

					<div class="col s12 m12 l12">
						<div class="card card-hy-f">
							<div class="card-content">
								<div class="row">
									<div class="col s12 m12 l8">
										<span class="card-title card-title-hy-f">Kunjungan Post</span>
										<ul class="collection colection-hy-f">
											<li class="collection-item colect-hy-f">Judul Postingan
												<div class="secondary-content-hy-f">2 Kunjungan</div>
											</li>
											<li class="collection-item colect-hy-f">Judul Postingan
												<div class="secondary-content-hy-f">2 Kunjungan</div>
											</li>
											<li class="collection-item colect-hy-f">Judul Postingan
												<div class="secondary-content-hy-f">10 Kunjungan</div>
											</li>
										</ul>
									</div>
									<div class="col s12 m12 l4"></div>
								</div>
							</div>

							<div class="card-link-hy-f">
								<a href="#!">
									<div class="card-action card-action-hy-f">
										Lihat Semua Post
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
