<section class="hy-page-header-detail-2 web-res">
	<div class="container hy-page-con left-align hy-page-pos">

		<nav class="bread-hy-post">
			<div class="nav-wrapper">
				<div class="col s12">

					<!-- Start ------------------------------------------------------------- Breadcumb Detail Post -->
					@if(request()->routeIs('UserLandingForumDetail'))
					<a href="{{route('UserLandingForum')}}" class="breadcrumb bread-hy-c-post">Hycost Forum</a>

					@foreach($datas as $dat)
					<a href="{{route('UserLandingForumKategori', str_replace(" ", "-", \App\Kategori::where(['id' => $dat->id_kategori])->value('kategori')))}}" class="breadcrumb bread-hy-c-post">
						{{ \App\Kategori::where(['id' => $dat->id_kategori])->value('kategori')}}
					</a>

					<a href="#!" class="breadcrumb bread-hy-c-post">{{$dat->judul}}</a>
					@endforeach
					@endif
					<!-- End ------------------------------------------------------------- /Breadcumb Detail Post -->

					<!-- Start ------------------------------------------------------------- Breadcumb Kategori Post -->
					@if(request()->routeIs('UserLandingForumKategori'))
					<a href="{{route('UserLandingForum')}}" class="breadcrumb bread-hy-c-post">Hycost Forum</a>

					@foreach($datas as $dat)
					<a href="#!" class="breadcrumb bread-hy-c-post">{{ \App\Kategori::where(['id' => $dat->id_kategori])->value('kategori')}}
					</a>
					@endforeach
					@endif
					<!-- End ------------------------------------------------------------- /Breadcumb Kategori Post -->

				</div>
			</div>
		</nav>

	</div>
</section>