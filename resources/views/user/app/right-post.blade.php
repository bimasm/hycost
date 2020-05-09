<div class="row">
	<div class="col s12 m12 l12">
		<div class="hy-title-list">
			<h5>Post Rekomendasi</h5>
		</div>

		<ul class="collection list-post">

			@if(request()->routeIs('UserLandingForumKategori'))
			@foreach($rekomendasi as $rekom)
			<li class="collection-item">
				<a href="{{route('UserLandingForumDetail', str_replace(" ", "-", $rekom->judul))}}" class="tooltipped" data-position="top" data-tooltip="{{$rekom->judul}}">
					<div class="card card-hy-f">
						<div class="card-content">

							<div class="row valign-wrapper">
								<div class="col s4 valign">
									<img src="{{ str_replace('public/','../../../', $rekom->gambar) }}">
								</div>

								<div class="col s8">
									<h6><b>{{$rekom->judul}}</b></h6>
									<ul class="collection colection-hy-f">
										<li class="collection-item colect-hy-f">
											{{ \App\Kategori::where('id', $rekom->id_kategori)->value('kategori') }}
										</li>
									</ul>
								</div>
							</div>

						</div>
					</div>
				</a>
			</li>
			@endforeach
			@endif

			@if(request()->routeIs('UserLandingForum'))
			@foreach($rekomendasi as $rekom)
			<li class="collection-item">
				<a href="{{route('UserLandingForumDetail', str_replace(" ", "-", $rekom->judul))}}" class="tooltipped" data-position="top" data-tooltip="{{$rekom->judul}}">
					<div class="card card-hy-f">
						<div class="card-content">

							<div class="row valign-wrapper">
								<div class="col s4 valign">
									<img src="{{ str_replace('public/','../../../', $rekom->gambar) }}">
								</div>

								<div class="col s8">
									<h6><b>{{$rekom->judul}}</b></h6>
									<ul class="collection colection-hy-f">
										<li class="collection-item colect-hy-f">
											{{ \App\Kategori::where('id', $rekom->id_kategori)->value('kategori') }}
										</li>
									</ul>
								</div>
							</div>

						</div>
					</div>
				</a>
			</li>
			@endforeach
			@endif

			@if(request()->routeIs('UserLandingForumDetail'))
			@foreach($rekomendasi as $rekom)
			<li class="collection-item">
				<a href="{{route('UserLandingForumDetail', str_replace(" ", "-", $rekom->judul))}}" class="tooltipped" data-position="top" data-tooltip="{{$rekom->judul}}">
					<div class="card card-hy-f">
						<div class="card-content">

							<div class="row valign-wrapper">
								<div class="col s4 valign">
									<img src="{{ str_replace('public/','../../../', $rekom->gambar) }}">
								</div>

								<div class="col s8">
									<h6><b>{{$rekom->judul}}</b></h6>
									<ul class="collection colection-hy-f">
										<li class="collection-item colect-hy-f">
											{{ \App\Kategori::where('id', $rekom->id_kategori)->value('kategori') }}
										</li>
									</ul>
								</div>
							</div>

						</div>
					</div>
				</a>
			</li>
			@endforeach
			@endif

			@if(request()->routeIs('Usersearch'))
			@foreach($rekomendasi as $rekom)
			<li class="collection-item">
				<a href="{{route('UserLandingForumDetail', str_replace(" ", "-", $rekom->judul))}}" class="tooltipped" data-position="top" data-tooltip="{{$rekom->judul}}">
					<div class="card card-hy-f">
						<div class="card-content">

							<div class="row valign-wrapper">
								<div class="col s4 valign">
									<img src="{{ str_replace('public/','../../../', $rekom->gambar) }}">
								</div>

								<div class="col s8">
									<h6><b>{{$rekom->judul}}</b></h6>
									<ul class="collection colection-hy-f">
										<li class="collection-item colect-hy-f">
											{{ \App\Kategori::where('id', $rekom->id_kategori)->value('kategori') }}
										</li>
									</ul>
								</div>
							</div>

						</div>
					</div>
				</a>
			</li>
			@endforeach
			@endif

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