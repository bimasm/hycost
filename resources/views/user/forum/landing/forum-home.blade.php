@extends('aapp.app')

@section('title')
Forum
@endsection

@section('nav-landing-page')
@include('aapp.nav-landing-page')
@endsection

@section('content-landing-page')
<!-- Start ------------------------------------------------------------------------------------------- Slider -->
<section id="beranda" class="hy-page-header">
	<div class="container hy-page-con">
		<div class="hy-page-title center">
			<h4>Hycost Forum</h4>
			<h6>Kami di sini untuk membantu. Temukan solusi, bagikan ide, dan ikuti diskusi.</h6>
		</div>

		<div class="center-align" style="margin: 0 24%;">
			<div class="search-cont" style="width: 500px">
				<div class="nav-wrapper">
					<form>
						<div class="input-field">
							<input type="search" placeholder="Cari disini" required>
							<label class="label-icon" for="search">
								<i class="material-icons">search</i>
							</label>
							<i class="material-icons">close</i>
						</div>
					</form>
				</div>
			</div>
		</div>

	</div>
</section>
<!-- End ------------------------------------------------------------------------------------------- /Slider -->

<section id="fitur" name="fitur">
	<div class="container hy-page-con" style="width: 85%">
		<div class="row">
			<div class="col s12 m12 l8">
				
				<div class="hy-title-list row valign-wrapper-hy">
					<div class="col s12 m12 l6">
						<h5>Kategori</h5>
					</div>
					<div class="col s12 m12 l6 valign right-align">
							<a href="{{route('UserPostAddNewPost')}}" class='waves-effect btn-flat hy-btn-flat-2'><i class="material-icons left">rate_review</i>Buat Post Baru Sekarang</a>
					</div>
				</div>

				<ul class="collection" style="border:0">

					<li class="collection-item">
						<div class="row valign-wrapper-hy" style="margin-bottom: 0">
							<div class="col s12 m12 l6 valign">
								<a href="{{route('UserLandingForumKategori')}}"><h5>Judul Kategori</h5></a>
								<p>Learn more about the GitHub Community Forum and discover resources to help you get started.</p>
							</div>
							<div class="col s12 m12 l3 center-align">
								<div class="hy-property-post">
									<div class="nom">100</div>
									<div class="text">Post</div>
								</div>
							</div>
							<div class="col s12 m12 l3 center-align">
								<a href="{{route('UserLandingForumKategori')}}" class='waves-effect btn-flat hy-btn-flat-2'><i class="material-icons right">keyboard_arrow_right</i>Detail</a>
							</div>
						</div>
					</li>

					<li class="collection-item">
						<div class="row valign-wrapper-hy" style="margin-bottom: 0">
							<div class="col s12 m12 l6 valign">
								<a href="{{route('UserLandingForumKategori')}}"><h5>Judul Kategori</h5></a>
								<p>Learn more about the GitHub Community Forum and discover resources to help you get started.</p>
							</div>
							<div class="col s12 m12 l3 center-align">
								<div class="hy-property-post">
									<div class="nom">100</div>
									<div class="text">Post</div>
								</div>
							</div>
							<div class="col s12 m12 l3 center-align">
								<a href="{{route('UserLandingForumKategori')}}" class='waves-effect btn-flat hy-btn-flat-2'><i class="material-icons right">keyboard_arrow_right</i>Detail</a>
							</div>
						</div>
					</li>

					<li class="collection-item">
						<div class="row valign-wrapper-hy" style="margin-bottom: 0">
							<div class="col s12 m12 l6 valign">
								<a href="{{route('UserLandingForumKategori')}}"><h5>Judul Kategori</h5></a>
								<p>Learn more about the GitHub Community Forum and discover resources to help you get started.</p>
							</div>
							<div class="col s12 m12 l3 center-align">
								<div class="hy-property-post">
									<div class="nom">100</div>
									<div class="text">Post</div>
								</div>
							</div>
							<div class="col s12 m12 l3 center-align">
								<a href="{{route('UserLandingForumKategori')}}" class='waves-effect btn-flat hy-btn-flat-2'><i class="material-icons right">keyboard_arrow_right</i>Detail</a>
							</div>
						</div>
					</li>

					<li class="collection-item">
						<div class="row valign-wrapper-hy" style="margin-bottom: 0">
							<div class="col s12 m12 l6 valign">
								<a href="{{route('UserLandingForumKategori')}}"><h5>Judul Kategori</h5></a>
								<p>Learn more about the GitHub Community Forum and discover resources to help you get started.</p>
							</div>
							<div class="col s12 m12 l3 center-align">
								<div class="hy-property-post">
									<div class="nom">100</div>
									<div class="text">Post</div>
								</div>
							</div>
							<div class="col s12 m12 l3 center-align">
								<a href="{{route('UserLandingForumKategori')}}" class='waves-effect btn-flat hy-btn-flat-2'><i class="material-icons right">keyboard_arrow_right</i>Detail</a>
							</div>
						</div>
					</li>

					<li class="collection-item">
						<div class="row valign-wrapper-hy" style="margin-bottom: 0">
							<div class="col s12 m12 l6 valign">
								<a href="{{route('UserLandingForumKategori')}}"><h5>Judul Kategori</h5></a>
								<p>Learn more about the GitHub Community Forum and discover resources to help you get started.</p>
							</div>
							<div class="col s12 m12 l3 center-align">
								<div class="hy-property-post">
									<div class="nom">100</div>
									<div class="text">Post</div>
								</div>
							</div>
							<div class="col s12 m12 l3 center-align">
								<a href="{{route('UserLandingForumKategori')}}" class='waves-effect btn-flat hy-btn-flat-2'><i class="material-icons right">keyboard_arrow_right</i>Detail</a>
							</div>
						</div>
					</li>

				</ul>

			</div>

			<div class="col s12 m12 l4 rightbar-post-hy">
				<div class="hy-title-list">
					<h5>Rekomendasi Post</h5>
				</div>

				<div class="row">
					<div class="col s12 m12 l12">
						<ul class="collection list-post">

							<li class="collection-item">
								<a href="#!" class="tooltipped" data-position="top" data-tooltip="7 Rekomendasi Film Bertema Wabah Virus Untuk Menghibur">
									<div class="card card-hy-f">
										<div class="card-content">

											<div class="row valign-wrapper-hy">
												<div class="col s12 m12 l4 valign">
													<img src="https://blue.kumparan.com/image/upload/fl_progressive,fl_lossy,c_fill,q_auto:best,w_640/v1579790778/ljwbwwpqqqzv3au5vsnn.jpg">
												</div>

												<div class="col s12 m12 l8">
													<h6><b>7 Rekomendasi Film Bertema Wabah Virus Untuk Menghibur</b></h6>
													<ul class="collection colection-hy-f">
														<li class="collection-item colect-hy-f">
															Kebun
														</li>
													</ul>
												</div>
											</div>

										</div>
									</div>
								</a>
							</li>

							<li class="collection-item">
								<a href="#!" class="tooltipped" data-position="top" data-tooltip="7 Rekomendasi Film Bertema Wabah Virus Untuk Menghibur">
									<div class="card card-hy-f">
										<div class="card-content">

											<div class="row valign-wrapper-hy">
												<div class="col s12 m12 l4 valign">
													<img src="https://blue.kumparan.com/image/upload/fl_progressive,fl_lossy,c_fill,q_auto:best,w_640/v1579790778/ljwbwwpqqqzv3au5vsnn.jpg">
												</div>

												<div class="col s12 m12 l8">
													<h6><b>7 Rekomendasi Film Bertema Wabah Virus Untuk Menghibur</b></h6>
													<ul class="collection colection-hy-f">
														<li class="collection-item colect-hy-f">
															Kebun
														</li>
													</ul>
												</div>
											</div>

										</div>
									</div>
								</a>
							</li>

							<li class="collection-item">
								<a href="#!" class="tooltipped" data-position="top" data-tooltip="7 Rekomendasi Film Bertema Wabah Virus Untuk Menghibur">
									<div class="card card-hy-f">
										<div class="card-content">

											<div class="row valign-wrapper-hy">
												<div class="col s12 m12 l4 valign">
													<img src="https://blue.kumparan.com/image/upload/fl_progressive,fl_lossy,c_fill,q_auto:best,w_640/v1579790778/ljwbwwpqqqzv3au5vsnn.jpg">
												</div>

												<div class="col s12 m12 l8">
													<h6><b>7 Rekomendasi Film Bertema Wabah Virus Untuk Menghibur</b></h6>
													<ul class="collection colection-hy-f">
														<li class="collection-item colect-hy-f">
															Kebun
														</li>
													</ul>
												</div>
											</div>

										</div>
									</div>
								</a>
							</li>

							<li class="collection-item">
								<a href="#!" class="tooltipped" data-position="top" data-tooltip="7 Rekomendasi Film Bertema Wabah Virus Untuk Menghibur">
									<div class="card card-hy-f">
										<div class="card-content">

											<div class="row valign-wrapper-hy">
												<div class="col s12 m12 l4 valign">
													<img src="https://blue.kumparan.com/image/upload/fl_progressive,fl_lossy,c_fill,q_auto:best,w_640/v1579790778/ljwbwwpqqqzv3au5vsnn.jpg">
												</div>

												<div class="col s12 m12 l8">
													<h6><b>7 Rekomendasi Film Bertema Wabah Virus Untuk Menghibur</b></h6>
													<ul class="collection colection-hy-f">
														<li class="collection-item colect-hy-f">
															Kebun
														</li>
													</ul>
												</div>
											</div>

										</div>
									</div>
								</a>
							</li>

							<li class="collection-item">
								<a href="#!" class="tooltipped" data-position="top" data-tooltip="7 Rekomendasi Film Bertema Wabah Virus Untuk Menghibur">
									<div class="card card-hy-f">
										<div class="card-content">

											<div class="row valign-wrapper-hy">
												<div class="col s12 m12 l4 valign">
													<img src="https://blue.kumparan.com/image/upload/fl_progressive,fl_lossy,c_fill,q_auto:best,w_640/v1579790778/ljwbwwpqqqzv3au5vsnn.jpg">
												</div>

												<div class="col s12 m12 l8">
													<h6><b>7 Rekomendasi Film Bertema Wabah Virus Untuk Menghibur</b></h6>
													<ul class="collection colection-hy-f">
														<li class="collection-item colect-hy-f">
															Kebun
														</li>
													</ul>
												</div>
											</div>

										</div>
									</div>
								</a>
							</li>

						</ul>
					</div>
				</div>
				

			</div>
		</div>
	</div>
</section>
@endsection