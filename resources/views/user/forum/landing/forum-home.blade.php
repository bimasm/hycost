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

		<div class="center-align search-cont-landing-cont">
			<div class="search-cont-landing">
				<div class="nav-wrapper">
					<form action="{{ route('Usersearch') }}" method="post">
						@csrf
						<div class="input-field">
							<input type="search" name="search" placeholder="Cari disini" required>
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
					<div class="col s12 m12 l6 valign right-align-responsive">
						<a href="{{route('UserPostAddNewPost')}}" class='waves-effect btn-flat hy-btn-flat-2'><i class="material-icons left">rate_review</i>Buat Post Baru Sekarang</a>
					</div>
				</div>

				<ul class="collection" style="border:0">

					@foreach($data as $dat)
					<li class="collection-item">
						<div class="row valign-wrapper-hy" style="margin-bottom: 0">
							<div class="col s12 m12 l6 valign">
								<a href="{{route('UserLandingForumKategori', str_replace(" ", "-", $dat->kategori))}}"><h5>{{$dat->kategori}}</h5></a>
								<p>{{$dat->desc}}</p>
							</div>
							<div class="col s12 m12 l3 center-align">
								<div class="hy-property-post">
									<div class="nom">{{ \App\Post::where('id_kategori', $dat->id)->count() }}</div>
									<div class="text">Post</div>
								</div>
							</div>
							<div class="col s12 m12 l3 center-align web-res">
								<a href="{{route('UserLandingForumKategori', $dat->id)}}" class='waves-effect btn-flat hy-btn-flat-2'><i class="material-icons right">keyboard_arrow_right</i>Detail</a>
							</div>
						</div>
					</li>
					@endforeach

				</ul>
			</div>

			<div class="col s12 m12 l4 rightbar-post-hy">		
				@include('user.app.right-post')
			</div>
		</div>
	</div>
</section>
@endsection