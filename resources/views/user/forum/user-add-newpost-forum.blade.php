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
	<form action="" method="">
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
								<input placeholder="Judul" id="first_name" type="text" class="validate hy-input-border" name="judul">
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
													<div class="secondary-content-hy-f">Nama</div>
												</li>
												<li class="collection-item colect-hy-f">Tanggal
													<div class="secondary-content-hy-f">21 Juni 2020</div>
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
														<ul class="collection">
															<li class="collection-item">
																<p>
																	<label>
																		<input type="checkbox" class="filled-in" />
																		<span>Filled in1</span>
																	</label>
																</p>
															</li>
															<li class="collection-item">
																<p>
																	<label>
																		<input type="checkbox" class="filled-in" />
																		<span>Filled in1</span>
																	</label>
																</p>
															</li>
															<li class="collection-item">
																<p>
																	<label>
																		<input type="checkbox" class="filled-in" />
																		<span>Filled in1</span>
																	</label>
																</p>
															</li>
															<li class="collection-item">
																<p>
																	<label>
																		<input type="checkbox" class="filled-in" />
																		<span>Filled in1</span>
																	</label>
																</p>
															</li>
														</ul>
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
						<div class="col s12 m12 l12 center-align" style="border-top: 1px solid #dadce0; padding-top: 3em">
							<div class="mobile-res">
								<button type="submit" class="waves-effect waves-light btn hy-b-color-7" style="width: 100%"><i class="material-icons right">send</i>Publikasi</button>
							</div>
							<a href="{{ URL::previous() }}" class='waves-effect btn-flat hy-btn-flat-1'><i class="material-icons right"></i>Cancel</a>

							<a href="#!" class='waves-effect btn-flat hy-btn-flat-3'><i class="material-icons right">send</i>Publikasi Post</a>
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

		plugins: 'preview paste importcss searchreplace autolink autosave save directionality code visualblocks visualchars fullscreen image link media template codesample charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists imagetools textpattern charmap quickbars emoticons',

		imagetools_cors_hosts: ['picsum.photos'],

		menubar: false,

		toolbar: 'undo redo | bold italic underline strikethrough | fontselect fontsizeselect formatselect | alignleft aligncenter alignright alignjustify | outdent indent |  numlist bullist | forecolor backcolor removeformat | | charmap emoticons | preview | insertfile image media link codesample | ltr rtl',

		toolbar_sticky: true,
		autosave_ask_before_unload: true,
		autosave_interval: "30s",
		autosave_prefix: "{path}{query}-{id}-",
		autosave_restore_when_empty: false,
		autosave_retention: "2m",
		image_advtab: true,
		content_css: '{{asset('asset/css/tyni.css')}}',
		link_list: [
		{ title: 'My page 1', value: 'http://www.tinymce.com' },
		{ title: 'My page 2', value: 'http://www.moxiecode.com' }
		],
		image_list: [
		{ title: 'My page 1', value: 'http://www.tinymce.com' },
		{ title: 'My page 2', value: 'http://www.moxiecode.com' }
		],
		image_class_list: [
		{ title: 'None', value: '' },
		{ title: 'Some class', value: 'class-name' }
		],
		importcss_append: true,
		height: 400,
		file_picker_callback: function (callback, value, meta) {
			/* Provide file and text for the link dialog */
			if (meta.filetype === 'file') {
				callback('https://www.google.com/logos/google.jpg', { text: 'My text' });
			}

			/* Provide image and alt text for the image dialog */
			if (meta.filetype === 'image') {
				callback('https://www.google.com/logos/google.jpg', { alt: 'My alt text' });
			}

			/* Provide alternative source and posted for the media dialog */
			if (meta.filetype === 'media') {
				callback('movie.mp4', { source2: 'alt.ogg', poster: 'https://www.google.com/logos/google.jpg' });
			}
		},
		templates: [
		{ title: 'Starting my story', description: 'A cure for writers block', content: 'Once upon a time...' },
		{ title: 'New list with dates', description: 'New List with dates', content: '<div class="mceTmpl"><span class="cdate">cdate</span><br /><span class="mdate">mdate</span><h2>My List</h2><ul><li></li><li></li></ul></div>' }
		],
		template_cdate_format: '[Date Created (CDATE): %m/%d/%Y : %H:%M:%S]',
		template_mdate_format: '[Date Modified (MDATE): %m/%d/%Y : %H:%M:%S]',
		height: 500,
		image_caption: true,
		quickbars_selection_toolbar: 'bold italic | quicklink h2 h3 blockquote quickimage',
		toolbar_mode: 'sliding',
		contextmenu: "link image imagetools",
	});

</script>
@endsection