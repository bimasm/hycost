@extends('aapp.app')

@section('title')
Komentar Forum User
@endsection

@section('nav-user')
@include('user.app.nav-back')  
@endsection

@section('sidenav-user')
{{-- @include('user.app.side-nav') --}}
@endsection

@section('content-user')
<section>
	<form action="{{ route('reply.add') }}" method="POST">
		@csrf
		<input type="hidden" name="post_id" value="{{ $post }}" />
        <input type="hidden" name="comment_id" value="{{ $cm }}" />
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
							{{-- <div class="input-field hy-infield">
								<input placeholder="Subject" id="first_name" type="text" class="validate hy-input-border" name="judul">
							</div> --}}

							<textarea id="full-featured-non-premium" name="comment_body"></textarea>
						</div>

						<div class="col s12 m12 l12 hy-pos-view hy-komen-ke">
							<h5>Komentar Ke:</h5>
							
							<div class="card card-hy-f owner">
								<div class="card-content">
									<div class="row">

										<div class="col s12 m12 l12 hy-title-list">
											<ul class="collection user hy-user">
												<li class="collection-item avatar">
													<img src="https://materializecss.com/images/yuna.jpg" alt="" class="circle">
													<span class="title user-post-hy">{{ \App\User::where('id',\App\Comment::where('id',$cm)->value('user_id'))->value('nama') }}</span>
													<span class="title tgl-post-hy">{{ \App\Comment::where('id',$cm)->value('created_at') }}</span>
												</li>
											</ul>
										</div>

										<div class="col s12 m12 l12 content-text">
											{{ \App\Comment::where('id',$cm)->value('body') }}
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="col s12 m12 l12 center-align hy-cont-fot-add">
							<div class="mobile-res">
								<button type="submit" class="waves-effect waves-light btn hy-b-color-7" style="width: 100%"><i class="material-icons right">send</i>Publikasi Post</button>

								<a href="{{ URL::previous() }}" class='waves-effect btn-flat hy-btn-flat-1'><i class="material-icons right"></i>Batal</a>
							</div>

							<div class="web-res">
								<a href="{{ URL::previous() }}" class='waves-effect btn-flat hy-btn-flat-1'><i class="material-icons right"></i>Batal</a>

								<button type="submit" class='waves-effect btn-flat hy-btn-flat-3'><i class="material-icons right">send</i>Publikasi</button>
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