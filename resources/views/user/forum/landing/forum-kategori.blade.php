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
						<a href="{{route('UserLandingForum')}}" class="breadcrumb bread-hy-c-post">Hycost Forum</a>
						@foreach($data as $dat)
						<a href="#!" class="breadcrumb bread-hy-c-post">{{ \App\Kategori::where(['id' => $dat->id_kategori])->value('kategori')}}</a>
						@endforeach
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

							@foreach($data as $dat)
							<li class="collection-item">
								<a href="{{route('UserLandingForumDetail', str_replace(" ", "-", $dat->judul))}}" class="tooltipped" data-position="top" data-tooltip="7 Rekomendasi Film Bertema Wabah Virus Untuk Menghibur">
									<div class="card card-hy-f">
										<div class="card-content">

											<div class="row valign-wrapper-hy">
												<div class="col s12 m12 l2 valign" style="margin-right: 0; padding: 0; text-align: center;">
													<img src="{{ str_replace('public/','../../../', $dat->gambar) }}">
												</div>

												<div class="col s12 m12 l10">
													<div class="row valign-wrapper-hy">
														<div class="col s12 m12 l8 valign">
															<h6><b>{{$dat->judul}}</b></h6>
															<ul class="collection colection-hy-f">
																<li class="collection-item colect-hy-f">
																	By {{ \App\User::where(['id' => $dat->id_user])->value('nama')}}, 21 Juni 2020
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
							@endforeach

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
				@include('user.app.right-post')
			</div>
		</div>
	</div>
</section>
@endsection