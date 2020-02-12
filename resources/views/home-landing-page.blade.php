@extends('aapp.app')

@section('title')
Hycost
@endsection

@section('nav-landing-page')
@include('aapp.nav-landing-page')
@endsection

@section('content-landing-page')
<!-- Start ------------------------------------------------------------------------------------------- Slider -->
<section id="beranda">
	<div class="carousel carousel-slider hy-slide">

		<div class="carousel-item" href="#one!">
			<div class="container hy-container-slide">
				<div class="row hy-slide-con">
					<div class="col s12 m6 l4">
						<div class="animated is-visible hy-slide-text">
							<h2>HYCOST</h2>
							<h5>Hydroponic Control System</h5>
							<p>
								membantu petani hidroponik untuk mengontrol tanaman hidroponik dalam hal nutrisi, PH, kadar air, kelembapan suhu yang dapat dikontrol petani melalui smartphone.
							</p>
						</div>
					</div>

					<div class="col s12 m6 l8 center">
						<div class="animated bounceInRight">
							<center>
								<img src="asset/img/slide/sld-1.png" class="hy-slide-img">
							</center>
						</div>
					</div>
				</div>
			</div>  
		</div>

		<div class="carousel-item" href="#two!">
			<div class="container hy-container-slide">
				<div class="row hy-slide-con">
					<div class="col s12 m6 l4">
						<div class="animated is-visible hy-slide-text">
							<h2>HYCOST</h2>
							<h5>Hydroponic Control System</h5>
							<p>
								membantu petani hidroponik untuk mengontrol tanaman hidroponik dalam hal nutrisi, PH, kadar air, kelembapan suhu yang dapat dikontrol petani melalui smartphone.
							</p>
						</div>
					</div>

					<div class="col s12 m6 l8 center">
						<div class="animated bounceInRight">
							<center>
								<img src="asset/img/slide/sld-2.png" class="hy-slide-img">
							</center>
						</div>
					</div>
				</div>
			</div>  
		</div>

	</div>
	<div class="hy-b-color-3 hy-slide-af"></div>
</section>
<!-- End ------------------------------------------------------------------------------------------- /Slider -->

<section id="tentang" name="tentang" class="hy-b-color-5">
	<div class="container hy-page-con">
		<div class="row">
			<div class="col s12 m6 l12">

				<div class="scroll-animations3">
					<div class="animated is-visible">

						<div class="hy-page-title center">
							<h5><span class="underline"><b>Tentang Kami</b></span></h5>
							<h6>Hydroponic Control System</h6>
						</div>

						<div class="hy-page-cont center">
							<p>
								Hycost atau singkatan dari Hydroponic Control System adalah sebuah teknologi berupa alat yang memiliki fungsi membantu petani hidroponik untuk mengontrol tanaman hidroponik dalam hal nutrisi, PH, kadar air, kelembapan suhu yang dapat dikontrol petani melalui smartphone
							</p>

							<img src="asset/img/img-ab.png" style="width: 80%;">
						</div>

					</div>
				</div>

			</div>
		</div>
	</div>
</section>

<section id="fitur" name="fitur">
	<div class="container hy-page-con">
		<div class="row">
			<div class="col s12 m12 l12">

				<div class="scroll-animations3">
					<div class="animated is-visible">

						<div class="hy-page-title center">
							<h5><span class="underline"><b>Fitur</b></span></h5>
							<h6>Hydroponic Control System</h6>
						</div>

						<div class="hy-page-cont center">
							<div class="row">
								<div class="col s12 m12 l4">
									<div class="card hy-card">
										<div class="card-content hy-color-2">
											<img src="asset/img/fitur/2.png" style="width:50px;">
											<span class="card-title suhu-air">Suhu Air</span>
											<p>Memonitoring dan mengatur Suhu Air yang mengalir pada pipa hydroponic agar tetap stabil sesuai dengan setpoint yang diinginkan</p>
										</div>
									</div>
								</div>
								<div class="col s12 m12 l4">
									<div class="card hy-card">
										<div class="card-content hy-color-2">
											<img src="asset/img/fitur/1.png" style="width:50px;">
											<span class="card-title suhu-ruangan">Suhu Ruangan</span>
											<p>Memonitoring dan mengatur Suhu Ruangan kebun hydroponic agar tetap stabil sesuai dengan setpoint yang diinginkan</p>
										</div>
									</div>
								</div>
								<div class="col s12 m12 l4">
									<div class="card hy-card">
										<div class="card-content hy-color-2">
											<img src="asset/img/fitur/3.png" style="width:50px;">
											<span class="card-title volume">Volume Air</span>
											<p>Memonitoring dan mengatur Volume Air hydroponic agar tetap stabil sesuai dengan setpoint yang diinginkan</p>
										</div>
									</div>
								</div>
								<div class="col s12 m12 l4">
									<div class="card hy-card">
										<div class="card-content hy-color-2">
											<img src="asset/img/fitur/4.png" style="width:50px;">
											<span class="card-title kandungan">Kandungan Air</span>
											<p>Memonitoring dan mengatur Kandungan Air hydroponic terutama pH dan Nutrisi yang dibutuhkan agar tetap stabil sesuai dengan setpoint yang diinginkan</p>
										</div>
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>

			</div>
		</div>
	</div>
</section>
@endsection

@section('footer-landing-page')
@include('aapp.footer-landing-page')
@endsection