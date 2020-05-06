 @foreach($comments as $comment)
<div class="col s12 m12 l12 hy-pos-view">
						{{-- <div class="card card-hy-f komen">
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
						</div> --}}

						<div class="card card-hy-f komen" style="margin-left: 3em">
							<div class="card-content">
								<div class="row">

									<div class="col s12 m12 l12 hy-title-list">
										<ul class="collection user hy-user">
											<li class="collection-item avatar">
												<img src="https://materializecss.com/images/yuna.jpg" alt="" class="circle">
												<span class="title user-post-hy">{{ $comment->user->nama }}</span>
												<span class="title tgl-post-hy">23, juni 2020</span>
												<a href="#!" data-target='dropdown13' class="secondary-content dropdown-trigger"><i class="material-icons hy-color-7">more_horiz</i></a>
											</li>
										</ul>
									</div>

									<div class="col s12 m12 l12 content-text">
										{{ $comment->body }}
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
							@include('partials._comment_replies', ['comments' => $comment->replies])
					</div>
					
						@endforeach