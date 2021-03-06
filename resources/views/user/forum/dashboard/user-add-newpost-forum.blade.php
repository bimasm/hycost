@extends('aapp.app')

@section('title')
Dashboard Forum User
@endsection

@section('nav-user')
@include('user.app.nav-back')  
@endsection

@section('sidenav-user')
{{-- @include('user.app.side-nav') --}}
@endsection

@section('content-user')
<section>
	<form action="{{ route('AddNewPost') }}" method="POST" enctype="multipart/form-data">
		@csrf
		<div class="content-hy-dash-add">
			<div class="container cont-hy-dash">

				{{-- Start Header --}}
				<div class="row bread-hy-cont animated fadeIn faster valign-wrapper-hy">
					<div class="col s12 m12 l12">
						{{--  Start Breadcumb --}}
						@include('user.app.breadcumb')
						{{--  End Breadcumb --}}
					</div>
				</div>
				{{-- End Header --}}

				<div class="cont-hy-dash-all animated fadeIn faster">
					<div class="row">

						<div class="col s12 m12 l12">
							<div class="input-field hy-infield">
								<input p laceholder="Judul" id="first_name" type="text" class="validate hy-input-border" name="judul">
							</div>

							<textarea id="full-featured-non-premium" name="konten"></textarea>
						</div>

						<div class="col s12 m12 l12">

							<div class="row" style="margin-top: 2em">
								<div class="col s12 m12 l5">
									<div class="card card-hy-f">
										<div class="card-content">
											<span class="card-title card-title-hy-f">Informasi</span>
											<ul class="collection colection-hy-f">
												<li class="collection-item colect-hy-f">Penulis
													<div class="secondary-content-hy-f">{{ Auth::guard('user')->user()->nama }}</div>
												</li>
												<li class="collection-item colect-hy-f">Tanggal
													<div class="secondary-content-hy-f">{{ date('H:i, j F Y', strtotime(\Carbon\Carbon::now())) }}</div>
												</li>
												<li class="collection-item colect-hy-f">Status
													<div class="secondary-content-hy-f">-</div>
												</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="col s12 m12 l7">
									<div class="card card-hy-f">
										<div class="card-content collap-card">
											<ul class="collapsible">
												<li>
													<div class="collapsible-header">
														<i class="material-icons">label_important</i>Tag
														<a class="collap-second-item">
															<i class="material-icons icon-rot">keyboard_arrow_down</i>
														</a>
													</div>
													<div class="collapsible-body">
														<div class="input-field">
															<div class="chips chips-autocomplete chips-placeholder">
																<input class="">
															</div>
														</div>
													</div>
												</li>
												<li>
													<div class="collapsible-header">
														<i class="material-icons">category</i>Kategori
														<a class="collap-second-item">
															<i class="material-icons icon-rot">keyboard_arrow_down</i>
														</a>
													</div>
													<div class="collapsible-body">

														@foreach ($kategori as $kat)
															<p>
															<label>
																<input name="kategori" type="radio" value="{{ $kat->id }}" />
																<span>{{ $kat->kategori }}</span>
															</label>
														</p>
														@endforeach
														{{-- <p>
															<label>
																<input name="kategori" type="radio" value="2"/>
																<span>Tanaman</span>
															</label>
														</p> --}}
													</div>
												</li>
												<li>
													<div class="collapsible-header collap-head-last-nobt">
														<i class="material-icons">wallpaper</i>Gambar
														<a class="collap-second-item">
															<i class="material-icons icon-rot">keyboard_arrow_down</i>
														</a>
													</div>
													<div class="collapsible-body collap-body-last-nobt">
														<div class="file-field input-field">
															<div class="btn">
																<span>File</span>
																<input type="file" name="gambar" multiple>
															</div>
															<div class="file-path-wrapper">
																<input class="file-path validate" type="text" placeholder="Upload one or more files" name="gambar">
															</div>
														</div>
													</div>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							
						</div>

						<div class="col s12 m12 l12 center-align hy-cont-fot-add">
							<div class="mobile-res">
								<button type="submit" class="btn-large waves-effect btn-flat hy-btn-flat-3" style="width: 100%"><i class="material-icons right">send</i>Publikasi Post</button>
							</div>

							<div class="web-res">
								<a href="{{ URL::previous() }}" class='waves-effect btn-flat hy-btn-flat-1'><i class="material-icons right"></i>Batal</a>

								<button type="submit" class='waves-effect btn-flat hy-btn-flat-3'><i class="material-icons right">send</i>Publikasi Post</button>
							</div>
						</div>

					</div>
				</div>

			</div>
		</div>
	</form>
</section>
@endsection

@section('js-plus')
<script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/5.2.1/tinymce.min.js"></script>

<script>

	$('.chips-placeholder').chips({
		placeholder: 'Tambahkan tag',
		secondaryPlaceholder: '+Tag',
	});

	$('.chips-autocomplete').chips({
		autocompleteOptions: {
			data: {
				'Apple': null,
				'Microsoft': null,
				'Google': null
			},
			limit: Infinity,
			minLength: 1
		}
	});

	tinymce.init({
		selector: 'textarea#full-featured-non-premium',
		height: 500,
		menubar: false,

		plugins: 'preview paste importcss searchreplace autolink autosave save directionality code visualblocks visualchars fullscreen link template codesample charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists textpattern charmap emoticons',

		toolbar: 'undo redo | bold italic underline strikethrough | fontselect fontsizeselect formatselect | alignleft aligncenter alignright alignjustify | outdent indent |  numlist bullist | forecolor backcolor removeformat | | charmap emoticons | preview | link',

		content_css: '{{asset('asset/css/tyni.css')}}',
	});

</script>
@endsection