@extends('aapp.app')

@section('title')
@foreach($datas as $dat)
{{ \App\Kategori::where(['id' => $dat->id_kategori])->value('kategori')}} | {{$dat->judul}}
@endforeach
@endsection

@section('nav-landing-page')
@include('aapp.nav-landing-page')
@endsection

@section('content-landing-page')
<!-- Start ------------------------------------------------------------------------------------------ Dropdown -->
@include('user.app.dropdown-detail-post')
<!-- End ------------------------------------------------------------------------------------------- /Dropdown -->
@include('user.app.breadcumb-landing')

<section id="fitur" name="fitur">
	<input type="hidden" id="input-url" value="Copied!">
	<div class="container hy-page-con hy-page-pos">
		<div class="row">
			<div class="col s12 m12 l8">
				<div class="row">

					@foreach($datas as $dat)
					<div class="col s12 m12 l12 hy-pos-view">
						<div class="card card-hy-f owner">
							<div class="card-content">
								<div class="row">

									<div class="col s12 m12 l12 hy-title-list">
										<ul class="collection user hy-user">
											<li class="collection-item avatar">

												<img src="https://materializecss.com/images/yuna.jpg" alt="" class="circle">
												<span class="title user-post-hy">
													{{ \App\User::where(['id' => $dat->id_user])->value('nama')}}
												</span>
												<span class="title tgl-post-hy">
													{{ date('H:i', strtotime($dat->created_at)) }}
												</span>
												<span class="title tgl-post-hy">
													{{ date('j F Y', strtotime($dat->created_at)) }}
												</span>

												<a href="#!" data-target='dropdown13' class="secondary-content dropdown-trigger">
													<i class="material-icons hy-color-7">more_horiz</i>
												</a>
											</li>
										</ul>
									</div>

									<div class="col s12 m12 l12">
										<h5 id="judul"></h5>
									</div>
									<div class="col s12 m12 l12 content-text">
										<div id="isi"></div>
									</div>
									<div id="end-content"></div>

									<div class="col s12 m12 l12">
										
										<div class="sub-footer-hy-post row valign-wrapper-hy">
											<div class="col s12 m12 l6 suka valign">

												<a href="#!" class="loss text-atr-komen hy-who-like-btn tooltipped" data-delay="50" data-html="true" data-position="bottom" data-tooltip='
												@foreach($likes as $lik)
												{{\App\User::where('id', $lik->user_id)->value('nama')}}<br>
												@endforeach
												'>
												<span>
													@if(Auth::guard('user')->check())
													@foreach ($like as $lk)

													@if ($lk->user_id==Auth::guard('user')->user()->id)
													anda
													@else
													{{ \App\User::where('id', $lk->user_id)->value('nama') }}
													@endif
													,

													@endforeach

													@else
													@foreach ($like as $lk)
													{{ \App\User::where('id', $lk->user_id)->value('nama') }}
													,

													@endforeach
													@endif

													@if ($tot>0)
													dan {{ $tot }} Orang

													@endif
												</span><span>
													@if ($tot<-1)
													0 Orang Menyukai
													@else
													Menyukai
													@endif
												</span>
											</a>
										</div>
										<div class="col s12 m12 l6 komentar">
											<a href="#!" class="text-atr-komen hy-who-like-btn">
												<span>{{ \App\Comment::where('commentable_id', $dat->id)->count() }}</span>
												<span> Komentar</span>
											</a>
										</div>
									</div>

									<div class="footer-hy-post row center-align">
										<div class="col s4">

											@if(Auth::guard('user')->check())
											@if(\App\Like::where('user_id', Auth::guard('user')->user()->id)->where('post_id',$dat->id)->count()>0)

											<form action="{{route('dislikes')}}" method="post">
												@csrf
												<input type="hidden" name="idpost" value="{{$dat->id}}">
												<button type="submit" class='btn-large waves-effect btn-flat hy-btn-flat-4'><i style="color: #80be42;" class="material-icons left">thumb_up</i>Suka</button>
											</form>

											@else

											<form action="{{route('likes')}}" method="post">
												@csrf
												<input type="hidden" name="idpost" value="{{$dat->id}}">
												<button type="submit" class='btn-large waves-effect btn-flat hy-btn-flat-4'><i class="material-icons left">thumb_up</i>Suka</button>
											</form>
											@endif

											@else
											<a data-target="modal-must-login" class='btn-large waves-effect btn-flat hy-btn-flat-4 modal-trigger'><i class="material-icons left">thumb_up</i>Suka</a>
											@endif


										</div>
										<div class="col s4">
											@if(Auth::guard('user')->check())
											<a href="{{route('UserLandingForumKomentar', str_replace(" ", "-", $dat->judul))}}" class='btn-large waves-effect btn-flat hy-btn-flat-4'><i class="material-icons left">add_comment</i>Komentar</a>
											@else
											<a data-target="modal-must-login" class='btn-large waves-effect btn-flat hy-btn-flat-4 modal-trigger'><i class="material-icons left">add_comment</i>Komentar</a>
											@endif
										</div>
										<div class="col s4">
											<a href="#!" data-target='dropdown14' class='btn-large waves-effect btn-flat hy-btn-flat-4 dropdown-trigger'><i class="material-icons left">share</i>Bagikan</a>
										</div>
									</div>
									
								</div>

							</div>
						</div>
					</div>
				</div>

				@include('partials._comment_replies', ['comments' => $posts->comments, 'post_id' => $posts->id])
				@endforeach

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
<!-- Start ----------------------------------------------------------------------------------- Modal Laporkan -->
@include('user.app.modal-laporkan')
<!-- End ------------------------------------------------------------------------------------- /Modal Laporkan -->
@endsection

@section('js-plus')

<!-- Start ----------------------------------------------------------------------------------- Data Json -->
@foreach($datas as $dat)
<script>
	var settings = {
		"async": true,
		"crossDomain": true,
		"url": "{{route('userlandingForumDataPost', $dat->id)}}",
		"method": "GET"
	}

	$.ajax(settings).done(function (response) {
		console.log(response);

		for (var i=0;i<response.data.length;++i)
		{
			var judul = response.data[i].judul;
			var isi = response.data[i].isi;
			var tanggal = response.data[i].created_at;
		}

		$("#judul").append(judul);
		$("#isi").append(isi);
		$("#tanggal").append(tanggal);
	});
</script>
@endforeach
<!-- End ------------------------------------------------------------------------------------- /Data Json -->

<!-- Start ----------------------------------------------------------------------------------- Share Facebook -->
<script type="text/javascript">
	$(document).ready(function() {
		$('.fb-share').click(function(e) {
			e.preventDefault();
			window.open($(this).attr('href'), 'fbShareWindow', 'height=450, width=550, top=' + ($(window).height() / 2 - 275) + ', left=' + ($(window).width() / 2 - 225) + ', toolbar=0, location=0, menubar=0, directories=0, scrollbars=0');
			return false;
		});
	});
</script>
<!-- End ------------------------------------------------------------------------------------- /Share Facebook -->

<!-- Start ----------------------------------------------------------------------------------- Copy Link -->
<script type="text/javascript">
	$(document).ready(function() {
		$('input#input_text, textarea#textarea2').characterCounter();
	});

	var clipboard = new Clipboard('.btn-copy', {
		text: function() {
			return document.querySelector('input[type=hidden]').value;
		}
	});
	clipboard.on('success', function(e) {
		M.toast({html: 'Salin Link Berhasil'})
	});
	$("#input-url").val(location.href);
	$("#share-fb").attr('href','https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2F'+location.href);
	$("#share-twitter").attr('href','https://twitter.com/intent/tweet?text='+location.href);

	//safari
	if (navigator.vendor.indexOf("Apple")==0 && /\sSafari\//.test(navigator.userAgent)) {
		$('.btn-copy').on('click', function() {
			var msg = window.prompt("Copy this link", location.href);

		});
	}
</script>
<!-- End ------------------------------------------------------------------------------------ /Copy Link -->
@endsection