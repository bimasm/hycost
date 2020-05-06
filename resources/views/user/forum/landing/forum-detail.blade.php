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

<!-- Start ------------------------------------------------------------------------------------------- Slider -->
<!-- End ------------------------------------------------------------------------------------------- /Slider -->
<ul id='dropdown13' class='dropdown-content drop-hy-post-detail'>
	<li><a href="#end-content" class="hy-color-5"><i class="material-icons hy-color-5">arrow_downward</i>Lihat ke akhir Konten</a></li>
	<li class="divider" tabindex="-1"></li>
	<li><a href="#!" class="hy-color-5"><i class="material-icons hy-color-5">bookmark_border</i>Simpan Post</a></li>
	<li><a href="#!" class="hy-color-5"><i class="material-icons hy-color-5">bookmark</i>Post disimpan</a></li>
	<li class="divider" tabindex="-1"></li>
	<li><a href="#!" class="hy-color-5"><i class="material-icons hy-color-5">error_outline</i>Laporkan Post</a></li>
</ul>

<ul id='dropdown14' class='dropdown-content drop-hy-post-detail'>
	<li><a href="#!" class="hy-color-5"><i class="material-icons hy-color-5">web</i>Ke Media Sosial</a></li>
	<li class="divider" tabindex="-1"></li>
	<li><a href="#!" class="hy-color-5"><i class="material-icons hy-color-5">link</i>Salin Link</a></li>
</ul>

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
												<span class="title user-post-hy">{{ \App\User::where(['id' => $dat->id_user])->value('nama')}}</span>

												<span id="tanggal" class="title tgl-post-hy"></span>

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
												<a href="#!" class="loss text-atr-komen hy-who-like-btn tooltipped" data-delay="50" data-html="true" data-position="bottom" data-tooltip='Anggit <br> Bima <br> Ivan <br> Izha'>
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
													<span>2</span><span> Komentar</span>
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
												<a href="{{route('UserLandingForumKomentar')}}" class='btn-large waves-effect btn-flat hy-btn-flat-4'><i class="material-icons left">add_comment</i>Komentar</a>
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
					@endforeach

					{{-- <div class="col s12 m12 l12 hy-pos-view">
						<div class="card card-hy-f komen">
							<div class="card-content">
								<div class="row">

									<div class="col s12 m12 l12 hy-title-list">
										<ul class="collection user hy-user">
											<li class="collection-item avatar">
												<img src="https://materializecss.com/images/yuna.jpg" alt="" class="circle">
												<span class="title user-post-hy">Nama User</span>
												<span class="title tgl-post-hy">23, juni 2020</span>
												<a href="#!" data-target='dropdown13' class="secondary-content dropdown-trigger"><i class="material-icons hy-color-7">more_horiz</i></a>
											</li>
										</ul>
									</div>

									<div class="col s12 m12 l12 content-text">
										<p>Event KASKUS Cendolin ada lagi nih Gan. Jangan lupa siapin gelas masing-masing buat ngisi cendolnya ya.</p><br>
										<p>Seperti tahun-tahun sebelumnya, kali ini KASKUS juga mau bagi-bagi cendol gratis buat Kaskuser di seluruh Indonesia. Berbeda dari kegiatan cendolin biasanya yang langsung kasih cendol seger ke Kaskuser, kali ini KASKUS mau ngajak Gan Sist untuk ikutan bagiin cendol ke sesama Kaskuser meskipun lagi dalam kondisi social distancing.</p>
									</div>

									<div class="col s12 m12 l12">
										<div class="sub-footer-hy-post row valign-wrapper-hy">
											<div class="col s12 m12 l6 suka valign">
												<a href="#!" class="loss text-atr-komen hy-who-like-btn tooltipped" data-delay="50" data-html="true" data-position="bottom" data-tooltip='Anggit <br> Bima <br> Ivan <br> Izha'>
													<span>Anggit, Bima dan 2</span><span> Orang Menyukai</span>
												</a>
											</div>
											<div class="col s12 m12 l6 komentar">
												<a href="#!" class="text-atr-komen hy-who-like-btn">
													<span>1</span><span> Komentar</span>
												</a>
											</div>
										</div>
										<div class="footer-hy-post row center-align">
											<div class="col s4">
												<a href="#!" class='btn-large waves-effect btn-flat hy-btn-flat-4'><i class="material-icons left">thumb_up</i>Suka</a>
											</div>
											<div class="col s4">
												<a href="#!" class='btn-large waves-effect btn-flat hy-btn-flat-4'><i class="material-icons left">add_comment</i>Komentar</a>
											</div>
											<div class="col s4">
												<a href="#!" data-target='dropdown14' class='btn-large waves-effect btn-flat hy-btn-flat-4 dropdown-trigger'><i class="material-icons left">share</i>Bagikan</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="card card-hy-f komen" style="margin-left: 3em">
							<div class="card-content">
								<div class="row">

									<div class="col s12 m12 l12 hy-title-list">
										<ul class="collection user hy-user">
											<li class="collection-item avatar">
												<img src="https://materializecss.com/images/yuna.jpg" alt="" class="circle">
												<span class="title user-post-hy">Nama User</span>
												<span class="title tgl-post-hy">23, juni 2020</span>
												<a href="#!" data-target='dropdown13' class="secondary-content dropdown-trigger"><i class="material-icons hy-color-7">more_horiz</i></a>
											</li>
										</ul>
									</div>

									<div class="col s12 m12 l12 content-text">
										<p>Event KASKUS Cendolin ada lagi nih Gan. Jangan lupa siapin gelas masing-masing buat ngisi cendolnya ya.</p><br>
										<p>Seperti tahun-tahun sebelumnya, kali ini KASKUS juga mau bagi-bagi cendol gratis buat Kaskuser di seluruh Indonesia. Berbeda dari kegiatan cendolin biasanya yang langsung kasih cendol seger ke Kaskuser, kali ini KASKUS mau ngajak Gan Sist untuk ikutan bagiin cendol ke sesama Kaskuser meskipun lagi dalam kondisi social distancing.</p>
									</div>

									<div class="col s12 m12 l12">
										<div class="sub-footer-hy-post row valign-wrapper-hy">
											<div class="col s12 m12 l6 suka valign">
												<a href="#!" class="loss text-atr-komen hy-who-like-btn" data-delay="50" data-html="true" data-position="bottom" data-tooltip=''>
													<span>0</span><span> Orang Menyukai</span>
												</a>
											</div>
											<div class="col s12 m12 l6 komentar">
												<a href="#!" class="text-atr-komen hy-who-like-btn">
													<span>0</span><span> Komentar</span>
												</a>
											</div>
										</div>
										<div class="footer-hy-post row center-align">
											<div class="col s4">
												<a href="#!" class='btn-large waves-effect btn-flat hy-btn-flat-4 unlike-btn'><i class="material-icons left">thumb_up</i>Suka</a>
											</div>
											<div class="col s4">
												<a href="#!" class='btn-large waves-effect btn-flat hy-btn-flat-4'><i class="material-icons left">add_comment</i>Komentar</a>
											</div>
											<div class="col s4">
												<a href="#!" data-target='dropdown14' class='btn-large waves-effect btn-flat hy-btn-flat-4 dropdown-trigger'><i class="material-icons left">share</i>Bagikan</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div> --}}

				</div>
			</div>

			<div class="col s12 m12 l4 rightbar-post-hy">
				@include('user.app.right-post')
			</div>
		</div>
	</div>
</section>
@endsection

@section('js-plus')
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
@endsection