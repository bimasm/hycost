@extends('aapp.app')

@section('title')
Detail
@endsection

@section('nav-landing-page')
@include('aapp.nav-landing-page')
@endsection

@section('content-landing-page')
<!-- Start ------------------------------------------------------------------------------------------- Slider -->
<!-- End ------------------------------------------------------------------------------------------- /Slider -->
<ul id='dropdown13' class='dropdown-content drop-hy-post-detail'>
	<li><a href="#!" class="hy-color-5"><i class="material-icons hy-color-5">arrow_downward</i>Lihat ke akhir Konten</a></li>
	<li class="divider" tabindex="-1"></li>
	<li><a href="#!" class="hy-color-5"><i class="material-icons hy-color-5">error_outline</i>Laporkan Post</a></li>
</ul>

<section id="tentang" name="tentang" class="hy-page-header-detail-2">
	<div class="container hy-page-con left-align hy-page-pos">

		<div>
			<nav class="bread-hy-post">
				<div class="nav-wrapper">
					<div class="col s12">
						<a href="#!" class="breadcrumb bread-hy-c-post">Hycost Forum</a>
						<a href="#!" class="breadcrumb bread-hy-c-post">Kategori</a>
						<a href="#!" class="breadcrumb bread-hy-c-post">Kebun</a>
						<a href="#!" class="breadcrumb bread-hy-c-post">Judul Post</a>
					</div>
				</div>
			</nav>
		</div>

	</div>
</section>

<section id="fitur" name="fitur">
	<div class="container hy-page-con hy-page-pos">
		<div class="row">
			<div class="col s12 m12 l8">
				<div class="row">

					<div class="col s12 m12 l12 hy-pos-view">
						<div class="card card-hy-f owner">
							<div class="card-content">
								<div class="row">

									<div class="col s12 m12 l12 hy-title-list">
										<ul class="collection user hy-user">
											<li class="collection-item avatar">

												<img src="https://materializecss.com/images/yuna.jpg" alt="" class="circle">
												<span class="title user-post-hy">Nama User</span>

												<span class="title tgl-post-hy">23, juni 2020</span>

												<a href="#!" data-target='dropdown13' class="secondary-content dropdown-trigger"><i class="material-icons hy-color-7">more_horiz</i></a>
											</li>
										</ul>
									</div>

									<div class="col s12 m12 l12 title-pos">
										<h5>Kaskuser Bantu Indonesia Pulih dari Covid19! Yuk Barengan Penuhin Gelas Cendolnya Gan - Part 4</h5>
									</div>
									<div class="col s12 m12 l12">
										<p>Event KASKUS Cendolin ada lagi nih Gan. Jangan lupa siapin gelas masing-masing buat ngisi cendolnya ya.</p><br>
										<p>Seperti tahun-tahun sebelumnya, kali ini KASKUS juga mau bagi-bagi cendol gratis buat Kaskuser di seluruh Indonesia. Berbeda dari kegiatan cendolin biasanya yang langsung kasih cendol seger ke Kaskuser, kali ini KASKUS mau ngajak Gan Sist untuk ikutan bagiin cendol ke sesama Kaskuser meskipun lagi dalam kondisi social distancing.</p><br>
										<p>Nah, gimana caranya? Gampang kok, Agan Sista cuma perlu ikutan empat program yang udah KASKUS siapin ini. Cendol yang diterima dari program-program tersebut, nantinya akan masuk ke dalam gelas cendol yang dikumpulkan oleh seluruh Kaskuser dan bisa Gan Sist liat di cendolin.kaskus.co.id.</p>
									</div>

									<div class="col s12 m12 l12">
										<div class="sub-footer-hy-post row valign-wrapper-hy">
											<div class="col s12 m12 l6 suka valign">
												<a href="#!" class="loss text-atr-komen hy-who-like-btn tooltipped" data-delay="50" data-html="true" data-position="bottom" data-tooltip='Anggit <br> Bima <br> Ivan <br> Izha'>
													<span>Anggit, Bima dan 2</span><span> Orang Menyukai</span>
												</a>
											</div>
											<div class="col s12 m12 l6 komentar">
												<a href="#!" class="text-atr-komen hy-who-like-btn">
													<span>2</span><span> Komentar</span>
												</a>
											</div>
										</div>
										<div class="footer-hy-post row center-align">
											<div class="col s4">
												<a href="#!" class='btn-large waves-effect btn-flat hy-btn-flat-4'><i class="material-icons left">thumb_up</i>Suka</a>
											</div>
											<div class="col s4">
												<a href="{{route('UserLandingForumKomentar')}}" class='btn-large waves-effect btn-flat hy-btn-flat-4'><i class="material-icons left">add_comment</i>Komentar</a>
											</div>
											<div class="col s4">
												<a href="#!" class='btn-large waves-effect btn-flat hy-btn-flat-4'><i class="material-icons left">reply</i>Bagikan</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col s12 m12 l12 hy-pos-view">
						<div class="card card-hy-f komen">
							<div class="card-content">
								<div class="row">

									<div class="col s12 m12 l12 hy-title-list">
										<ul class="collection user hy-user">
											<li class="collection-item avatar">
												<img src="https://materializecss.com/images/yuna.jpg" alt="" class="circle">
												<span class="title user-post-hy">Nama User</span>
												<span class="title tgl-post-hy">23, juni 2020</span>
												<a href="#!" data-target='dropdown13' class="secondary-content dropdown-trigger"><i class="material-icons hy-color-7">more_horiz</i></a>
											</li>
										</ul>
									</div>

									<div class="col s12 m12 l12 komen-text">
										<p>Event KASKUS Cendolin ada lagi nih Gan. Jangan lupa siapin gelas masing-masing buat ngisi cendolnya ya.</p><br>
										<p>Seperti tahun-tahun sebelumnya, kali ini KASKUS juga mau bagi-bagi cendol gratis buat Kaskuser di seluruh Indonesia. Berbeda dari kegiatan cendolin biasanya yang langsung kasih cendol seger ke Kaskuser, kali ini KASKUS mau ngajak Gan Sist untuk ikutan bagiin cendol ke sesama Kaskuser meskipun lagi dalam kondisi social distancing.</p>
									</div>

									<div class="col s12 m12 l12">
										<div class="sub-footer-hy-post row valign-wrapper-hy">
											<div class="col s12 m12 l6 suka valign">
												<a href="#!" class="loss text-atr-komen hy-who-like-btn tooltipped" data-delay="50" data-html="true" data-position="bottom" data-tooltip='Anggit <br> Bima <br> Ivan <br> Izha'>
													<span>Anggit, Bima dan 2</span><span> Orang Menyukai</span>
												</a>
											</div>
											<div class="col s12 m12 l6 komentar">
												<a href="#!" class="text-atr-komen hy-who-like-btn">
													<span>1</span><span> Komentar</span>
												</a>
											</div>
										</div>
										<div class="footer-hy-post row center-align">
											<div class="col s4">
												<a href="#!" class='btn-large waves-effect btn-flat hy-btn-flat-4'><i class="material-icons left">thumb_up</i>Suka</a>
											</div>
											<div class="col s4">
												<a href="#!" class='btn-large waves-effect btn-flat hy-btn-flat-4'><i class="material-icons left">add_comment</i>Komentar</a>
											</div>
											<div class="col s4">
												<a href="#!" class='btn-large waves-effect btn-flat hy-btn-flat-4'><i class="material-icons left">reply</i>Bagikan</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="card card-hy-f komen" style="margin-left: 3em">
							<div class="card-content">
								<div class="row">

									<div class="col s12 m12 l12 hy-title-list">
										<ul class="collection user hy-user">
											<li class="collection-item avatar">
												<img src="https://materializecss.com/images/yuna.jpg" alt="" class="circle">
												<span class="title user-post-hy">Nama User</span>
												<span class="title tgl-post-hy">23, juni 2020</span>
												<a href="#!" data-target='dropdown13' class="secondary-content dropdown-trigger"><i class="material-icons hy-color-7">more_horiz</i></a>
											</li>
										</ul>
									</div>

									<div class="col s12 m12 l12 komen-text">
										<p>Event KASKUS Cendolin ada lagi nih Gan. Jangan lupa siapin gelas masing-masing buat ngisi cendolnya ya.</p><br>
										<p>Seperti tahun-tahun sebelumnya, kali ini KASKUS juga mau bagi-bagi cendol gratis buat Kaskuser di seluruh Indonesia. Berbeda dari kegiatan cendolin biasanya yang langsung kasih cendol seger ke Kaskuser, kali ini KASKUS mau ngajak Gan Sist untuk ikutan bagiin cendol ke sesama Kaskuser meskipun lagi dalam kondisi social distancing.</p>
									</div>

									<div class="col s12 m12 l12">
										<div class="sub-footer-hy-post row valign-wrapper-hy">
											<div class="col s12 m12 l6 suka valign">
												<a href="#!" class="loss text-atr-komen hy-who-like-btn" data-delay="50" data-html="true" data-position="bottom" data-tooltip=''>
													<span>0</span><span> Orang Menyukai</span>
												</a>
											</div>
											<div class="col s12 m12 l6 komentar">
												<a href="#!" class="text-atr-komen hy-who-like-btn">
													<span>0</span><span> Komentar</span>
												</a>
											</div>
										</div>
										<div class="footer-hy-post row center-align">
											<div class="col s4">
												<a href="#!" class='btn-large waves-effect btn-flat hy-btn-flat-4'><i class="material-icons left">thumb_up</i>Suka</a>
											</div>
											<div class="col s4">
												<a href="#!" class='btn-large waves-effect btn-flat hy-btn-flat-4'><i class="material-icons left">add_comment</i>Komentar</a>
											</div>
											<div class="col s4">
												<a href="#!" class='btn-large waves-effect btn-flat hy-btn-flat-4'><i class="material-icons left">reply</i>Bagikan</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>

			<div class="col s12 m12 l4 rightbar-post-hy">
				@include('user.app.right-post')
			</div>
		</div>
	</div>
</section>
@endsection

@section('js-plus')
@endsection