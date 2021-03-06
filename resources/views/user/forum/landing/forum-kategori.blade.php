@extends('aapp.app')

@section('title')
@foreach($datas as $dat)
{{ \App\Kategori::where(['id' => $dat->id_kategori])->value('kategori')}}
@endforeach
@endsection

@section('nav-landing-page')
@include('aapp.nav-landing-page')
@endsection

@section('content-landing-page')
@include('user.app.breadcumb-landing')

<section id="fitur" name="fitur">
	<div class="container hy-page-con hy-page-pos-list">
		<div class="row">
			<div class="col s12 m12 l8">

				<div class="hy-title-list row valign-wrapper-hy">
					<div class="col s12 m12 l6">
						<h5>Post Terbaru</h5>
					</div>
					<div class="col s12 m12 l6 valign right-align-responsive">
						<a href="{{route('UserPostAddNewPost')}}" class='waves-effect btn-flat hy-btn-flat-2'>
							<i class="material-icons left">rate_review</i>Buat Post Baru Sekarang
						</a>
					</div>
				</div>
				
				<div class="row">
					<div class="col s12 m12 l12">
						<ul class="collection list-post">

							@foreach($data as $dat)
							<li class="collection-item">
								<a href="{{route('UserLandingForumDetail', str_replace(" ", "-", $dat->judul))}}" class="tooltipped" data-position="top" data-tooltip="{{$dat->judul}}">
									<div class="card card-hy-f">
										<div class="card-content">

											<div class="row valign-wrapper">
												<div class="col s12 m12 l2 valign cont-img-post-list">
													<img src="{{ str_replace('public/','../../../', $dat->gambar) }}">
												</div>

												<div class="col s12 m12 l10">
													<div class="row valign-wrapper-hy">
														<div class="col s8 valign cont-post-list">
															<h6><b>{{$dat->judul}}</b></h6>
															<ul class="collection colection-hy-f">
																<li class="collection-item colect-hy-f">
																	By {{ \App\User::where(['id' => $dat->id_user])->value('nama')}}, <span>{{ date('j F Y', strtotime($dat->created_at)) }}</span>
																</li>
															</ul>
														</div>
														<div class="col s5 center-align">
															<div class="hy-property-post web-res">
																<div class="nom">{{ \App\Comment::where('commentable_id', $dat->id)->count() }}</div>
																<div class="text">Komentar</div>
															</div>
															<div class="hy-property-post mobile-res">
																<div class="text">{{ \App\Comment::where('commentable_id', $dat->id)->count() }} Komen</div>
															</div>
														</div>
														{{-- <div class="col s5 center-align">
															<div class="hy-property-post web-res">
																<div class="nom">100</div>
																<div class="text">Dibuka</div>
															</div>
															<div class="hy-property-post mobile-res">
																<div class="text">100 Dibuka</div>
															</div>
														</div> --}}
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
						@if ($data->hasPages())
						<ul class="pagination">
							<li class="waves-effect"><a href="{{$data->previousPageUrl()}}"><i class="material-icons">chevron_left</i></a></li>

							@foreach(range(1, $data->lastPage()) as $i)

							@if($i >= $data->currentPage() - 2 && $i <= $data->currentPage() + 2)
							@if ($i == $data->currentPage())

							<li class="active"><a href="#!">{{ $i }}</a></li>

							@else

							<li class="waves-effect"><a href="{{ $data->url($i) }}">{{ $i }}</a></li>

							@endif
							@endif
							@endforeach

							<li class="waves-effect"><a href="{{$data->nextPageUrl()}}"><i class="material-icons">chevron_right</i></a></li>
						</ul>
						@endif
					</div>
					
				</div>

			</div>

			<div class="col s12 m12 l4 rightbar-post-hy">
				<!-- Start ------------------------------------------------------------------------ Right Post -->
				@include('user.app.right-post')
				<!-- End -------------------------------------------------------------------------- /Right Post -->
			</div>
		</div>
	</div>
</section>
@endsection