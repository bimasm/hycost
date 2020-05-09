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
<ul id='dropdown13' class='dropdown-content drop-hy-post-detail'>
	<li>
		<a href="#end-content" class="hy-color-5">
			<i class="material-icons hy-color-5">arrow_downward</i>Lihat ke akhir Konten
		</a>
	</li>
	<li class="divider" tabindex="-1"></li>
	<li>
		<a href="#!" class="hy-color-5">
			<i class="material-icons hy-color-5">bookmark_border</i>Simpan Post
		</a>
	</li>
	<li>
		<a href="#!" class="hy-color-5">
			<i class="material-icons hy-color-5">bookmark</i>Post disimpan
		</a>
	</li>
	<li class="divider" tabindex="-1"></li>
	<li>
		<a href="#!" data-target="modal-laporkan" class="hy-color-5 modal-trigger">
			<i class="material-icons hy-color-5">error_outline</i>Laporkan Post
		</a>
	</li>
</ul>

<ul id='dropdown14' class='dropdown-content drop-hy-post-detail'>
	<li>
		<a href="#!" class="hy-color-5 fb-share" id="share-fb" target="_blank">
			<i class="fab fa-facebook icon-fontaw"></i>Bagikan ke Facebook
		</a>
	</li>
	<li class="divider" tabindex="-1"></li>
	<li>
		<a href="#!" class="hy-color-5 twitter-share-button" id="share-twitter" data-size="large" target="_blank">
			<i class="fab fa-twitter-square icon-fontaw"></i>Bagikan ke Twitter
		</a>
	</li>
	<li class="divider" tabindex="-1"></li>
	<li>
		<a href="#!" class="btn-copy hy-color-5">
			<i class="material-icons hy-color-5">link</i>Salin Link
		</a>
	</li>
</ul>
<!-- End ------------------------------------------------------------------------------------------- /Dropdown -->

<section id="tentang" name="tentang" class="hy-page-header-detail-2 web-res">
	<div class="container hy-page-con left-align hy-page-pos">

		<div>
			<nav class="bread-hy-post">
				<div class="nav-wrapper">
					<div class="col s12">
						<a href="{{route('UserLandingForum')}}" class="breadcrumb bread-hy-c-post">Hycost Forum</a>
						@foreach($datas as $dat)
						<a href="{{route('UserLandingForumKategori', str_replace(" ", "-", \App\Kategori::where(['id' => $dat->id_kategori])->value('kategori')))}}" class="breadcrumb bread-hy-c-post">{{ \App\Kategori::where(['id' => $dat->id_kategori])->value('kategori')}}</a>
						<a href="#!" class="breadcrumb bread-hy-c-post">{{$dat->judul}}</a>
						@endforeach
					</div>
				</div>
			</nav>
		</div>

	</div>
</section>

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

												<a href="#!" data-target='dropdown13' class="secondary-content dropdown-trigger"><i class="material-icons hy-color-7">more_horiz</i></a>
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
										@if(Auth::guard('user')->check())
										<div class="sub-footer-hy-post row valign-wrapper-hy">
											<div class="col s12 m12 l6 suka valign">
												<a href="#!" class="loss text-atr-komen hy-who-like-btn tooltipped" data-delay="50" data-html="true" data-position="bottom" data-tooltip='
												@foreach($likes as $lik)
												{{\App\User::where('id', $lik->user_id)->value('nama')}}<br>
												@endforeach
												'>
												<span>
													@foreach ($like as $lk)
													@if ($lk->user_id==Auth::guard('user')->user()->id)
													anda
													@else
													{{ \App\User::where('id', $lk->user_id)->value('nama') }}
													@endif
													,

													@endforeach
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
												<span>{{ \App\Comment::where('commentable_id', $dat->id)->count() }}</span><span> Komentar</span>
											</a>
										</div>
									</div>

									<div class="footer-hy-post row center-align">
										<div class="col s4">
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


										</div>
										<div class="col s4">
											<a href="{{route('UserLandingForumKomentar', str_replace(" ", "-", $dat->judul))}}" class='btn-large waves-effect btn-flat hy-btn-flat-4'><i class="material-icons left">add_comment</i>Komentar</a>
										</div>
										<div class="col s4">
											<a href="#!" data-target='dropdown14' class='btn-large waves-effect btn-flat hy-btn-flat-4 dropdown-trigger'><i class="material-icons left">share</i>Bagikan</a>
										</div>
									</div>
									@endif
								</div>

							</div>
						</div>
					</div>
				</div>

				@php
				$nol=0;
				@endphp
				@include('partials._comment_replies', ['comments' => $posts->comments, 'post_id' => $posts->id])
				@endforeach




			</div>
		</div>

		<div class="col s12 m12 l4 rightbar-post-hy">
			@include('user.app.right-post')
		</div>
	</div>
</div>
</section>

<div id="modal-laporkan" class="modal white" style="width: 40%">
	<div class="modal-content center-align">
		<h5>Laporkan Post</h5>
	</div>

	@if(Auth::guard('user')->check())
	<div class="modal-content">
		<form action="" method="POST">
			@csrf
			<div class="input-field hy-infield">
				<h6><b>Identitas Pelapor</b></h6>
				<div class="divider" tabindex="-1"></div>
			</div>
			<div class="input-field hy-infield">
				<input disabled  id="nama" type="text" class="validate hy-input" name="nama" value="{{ Auth::guard('user')->user()->nama }}">
				<label class="hy-label" for="nama">Nama</label>
			</div>
			<div class="input-field hy-infield">
				<input disabled  id="email" type="text" class="validate hy-input" name="email" value="{{ Auth::guard('user')->user()->email }}">
				<label class="hy-label" for="email">Email</label>
			</div>
			<div class="input-field hy-infield">
				<h6><b>Detail Laporan</b></h6>
				<div class="divider" tabindex="-1"></div>
			</div>
			<div class="input-field hy-infield">
				<select class="browser-default">
					<option value="" disabled selected>Jenis Laporan</option>
					<option value="1">Sara</option>
					<option value="2">Insult</option>
					<option value="3">Piracy</option>
					<option value="3">Other</option>
				</select>
			</div>
			<div class="input-field hy-infield">
				<textarea id="textarea2" class="materialize-textarea hy-input-border" name="alasan" data-length="120" style="min-height: 50px;" placeholder="Alasan"></textarea>
			</div>
			<div class="input-field center-align">
				<button type="submit" href="#!" class='waves-effect btn-flat hy-btn-flat-2'><i class="material-icons right">send</i>Kirim Laporan</button>
			</div>
		</form>
	</div>
	@else
	<div class="modal-content center-align">
		<div class="row">
			<div class="col s12 m12 l12">
				<span class="material-icons" style="font-size: 7em">error_outline</span>
			</div>
			<div class="col s12 m12 l12">
				<p>
					Anda mau melaporkan Post ini ?<br>
					Silahkan login terlebih dahulu pada link di bawah ini
				</p>
				<a href="/login" class='waves-effect btn-flat hy-btn-flat-2'><i class="material-icons right">arrow_forward</i>Login</a>
			</div>
		</div>
	</div>
	@endif

	<div class="modal-footer white">
		<a href="#!" class='modal-close waves-effect btn-flat hy-btn-flat hy-color-6'>Batal</a>
	</div>
</div>
@endsection

@section('js-plus')
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

<script type="text/javascript">
	$(document).ready(function() {
		$('.fb-share').click(function(e) {
			e.preventDefault();
			window.open($(this).attr('href'), 'fbShareWindow', 'height=450, width=550, top=' + ($(window).height() / 2 - 275) + ', left=' + ($(window).width() / 2 - 225) + ', toolbar=0, location=0, menubar=0, directories=0, scrollbars=0');
			return false;
		});
	});
</script>
@endsection