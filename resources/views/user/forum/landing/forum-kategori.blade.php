@extends('aapp.app')

@section('title')
Kategori
@endsection

@section('nav-landing-page')
@include('aapp.nav-landing-page')
@endsection

@section('content-landing-page')
<!-- Start ------------------------------------------------------------------------------------------- Slider -->
<!-- End ------------------------------------------------------------------------------------------- /Slider -->

<section id="tentang" name="tentang" class="hy-page-header-detail-2">
	<div class="container hy-page-con left-align hy-page-pos">

		<div>
			<nav class="bread-hy-post">
				<div class="nav-wrapper">
					<div class="col s12">
						<a href="#!" class="breadcrumb bread-hy-c-post">Hycost Forum</a>
						<a href="#!" class="breadcrumb bread-hy-c-post">Kategori</a>
						<a href="#!" class="breadcrumb bread-hy-c-post">Kebun</a>
					</div>
				</div>
			</nav>
		</div>

	</div>
</section>

<section id="fitur" name="fitur">
	<div class="container hy-page-con" style="width: 85%">
		<div class="row">
			<div class="col s12 m12 l8">

				<div class="hy-title-list row valign-wrapper-hy">
					<div class="col s12 m12 l6">
						<h5>Post Terbaru</h5>
					</div>
					<div class="col s12 m12 l6 valign right-align">
						<a href="{{route('UserPostAddNewPost')}}" class='waves-effect btn-flat hy-btn-flat-2'><i class="material-icons left">rate_review</i>Buat Post Baru Sekarang</a>
					</div>
				</div>
				
				<div class="row">
					<div class="col s12 m12 l12">
						<ul class="collection list-post">

							<li class="collection-item">
								<a href="{{route('UserLandingForumDetail')}}" class="tooltipped" data-position="top" data-tooltip="7 Rekomendasi Film Bertema Wabah Virus Untuk Menghibur">
									<div class="card card-hy-f">
										<div class="card-content">

											<div class="row valign-wrapper-hy">
												<div class="col s12 m12 l2 valign" style="margin-right: 0; padding: 0; text-align: center;">
													<img src="https://blue.kumparan.com/image/upload/fl_progressive,fl_lossy,c_fill,q_auto:best,w_640/v1579790778/ljwbwwpqqqzv3au5vsnn.jpg">
												</div>

												<div class="col s12 m12 l10">
													<div class="row valign-wrapper-hy">
														<div class="col s12 m12 l8 valign">
															<h6><b>7 Rekomendasi Film Bertema Wabah Virus Untuk Menghibur</b></h6>
															<ul class="collection colection-hy-f">
																<li class="collection-item colect-hy-f">
																	By Ivan, 21 Juni 2020
																</li>
															</ul>
														</div>
														<div class="col s12 m12 l2 center-align">
															<div class="hy-property-post">
																<div class="nom">100</div>
																<div class="text">Komerntar</div>
															</div>
														</div>
														<div class="col s12 m12 l2 center-align">
															<div class="hy-property-post">
																<div class="nom">100</div>
																<div class="text">Dibuka</div>
															</div>
														</div>
													</div>
													
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
												<div class="col s12 m12 l2 valign" style="margin-right: 0; padding: 0; text-align: center;">
													<img src="https://blue.kumparan.com/image/upload/fl_progressive,fl_lossy,c_fill,q_auto:best,w_640/v1579790778/ljwbwwpqqqzv3au5vsnn.jpg">
												</div>

												<div class="col s12 m12 l10">
													<div class="row valign-wrapper-hy">
														<div class="col s12 m12 l8 valign">
															<h6><b>7 Rekomendasi Film Bertema Wabah Virus Untuk Menghibur</b></h6>
															<ul class="collection colection-hy-f">
																<li class="collection-item colect-hy-f">
																	By Ivan, 21 Juni 2020
																</li>
															</ul>
														</div>
														<div class="col s12 m12 l2 center-align">
															<div class="hy-property-post">
																<div class="nom">100</div>
																<div class="text">Komerntar</div>
															</div>
														</div>
														<div class="col s12 m12 l2 center-align">
															<div class="hy-property-post">
																<div class="nom">100</div>
																<div class="text">Dibuka</div>
															</div>
														</div>
													</div>
													
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
												<div class="col s12 m12 l2 valign" style="margin-right: 0; padding: 0; text-align: center;">
													<img src="https://blue.kumparan.com/image/upload/fl_progressive,fl_lossy,c_fill,q_auto:best,w_640/v1579790778/ljwbwwpqqqzv3au5vsnn.jpg">
												</div>

												<div class="col s12 m12 l10">
													<div class="row valign-wrapper-hy">
														<div class="col s12 m12 l8 valign">
															<h6><b>7 Rekomendasi Film Bertema Wabah Virus Untuk Menghibur</b></h6>
															<ul class="collection colection-hy-f">
																<li class="collection-item colect-hy-f">
																	By Ivan, 21 Juni 2020
																</li>
															</ul>
														</div>
														<div class="col s12 m12 l2 center-align">
															<div class="hy-property-post">
																<div class="nom">100</div>
																<div class="text">Komerntar</div>
															</div>
														</div>
														<div class="col s12 m12 l2 center-align">
															<div class="hy-property-post">
																<div class="nom">100</div>
																<div class="text">Dibuka</div>
															</div>
														</div>
													</div>
													
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
												<div class="col s12 m12 l2 valign" style="margin-right: 0; padding: 0; text-align: center;">
													<img src="https://blue.kumparan.com/image/upload/fl_progressive,fl_lossy,c_fill,q_auto:best,w_640/v1579790778/ljwbwwpqqqzv3au5vsnn.jpg">
												</div>

												<div class="col s12 m12 l10">
													<div class="row valign-wrapper-hy">
														<div class="col s12 m12 l8 valign">
															<h6><b>7 Rekomendasi Film Bertema Wabah Virus Untuk Menghibur</b></h6>
															<ul class="collection colection-hy-f">
																<li class="collection-item colect-hy-f">
																	By Ivan, 21 Juni 2020
																</li>
															</ul>
														</div>
														<div class="col s12 m12 l2 center-align">
															<div class="hy-property-post">
																<div class="nom">100</div>
																<div class="text">Komerntar</div>
															</div>
														</div>
														<div class="col s12 m12 l2 center-align">
															<div class="hy-property-post">
																<div class="nom">100</div>
																<div class="text">Dibuka</div>
															</div>
														</div>
													</div>
													
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
												<div class="col s12 m12 l2 valign" style="margin-right: 0; padding: 0; text-align: center;">
													<img src="https://blue.kumparan.com/image/upload/fl_progressive,fl_lossy,c_fill,q_auto:best,w_640/v1579790778/ljwbwwpqqqzv3au5vsnn.jpg">
												</div>

												<div class="col s12 m12 l10">
													<div class="row valign-wrapper-hy">
														<div class="col s12 m12 l8 valign">
															<h6><b>7 Rekomendasi Film Bertema Wabah Virus Untuk Menghibur</b></h6>
															<ul class="collection colection-hy-f">
																<li class="collection-item colect-hy-f">
																	By Ivan, 21 Juni 2020
																</li>
															</ul>
														</div>
														<div class="col s12 m12 l2 center-align">
															<div class="hy-property-post">
																<div class="nom">100</div>
																<div class="text">Komerntar</div>
															</div>
														</div>
														<div class="col s12 m12 l2 center-align">
															<div class="hy-property-post">
																<div class="nom">100</div>
																<div class="text">Dibuka</div>
															</div>
														</div>
													</div>
													
												</div>
											</div>

										</div>
									</div>
								</a>
							</li>

						</ul>
					</div>
					<div class="col s12 m12 l12 center">
						<ul class="pagination">
							<li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
							<li class="active"><a href="#!">1</a></li>
							<li class="waves-effect"><a href="#!">2</a></li>
							<li class="waves-effect"><a href="#!">3</a></li>
							<li class="waves-effect"><a href="#!">4</a></li>
							<li class="waves-effect"><a href="#!">5</a></li>
							<li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
						</ul>
					</div>
					
				</div>

			</div>

			<div class="col s12 m12 l4 rightbar-post-hy">

				<div class="row">
					<div class="col s12 m12 l12">
						<div class="hy-title-list">
							<h5>Post Rekomendasi</h5>
						</div>

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
						</ul>
					</div>

					<div class="col s12 m12 l12">
						<div class="hy-title-list">
							<h5>Tag Rekomendasi</h5>
						</div>

						<div class="card card-hy-f" style="border:0">
							<div class="card-content">

								<a href="#!" class="chip-hy">
									Jane
								</a>

								<a href="#!" class="chip-hy">
									Jane
								</a>

								<a href="#!" class="chip-hy">
									Jane Doe
								</a>

								<a href="#!" class="chip-hy">
									Jane
								</a>

								<a href="#!" class="chip-hy">
									Jane
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