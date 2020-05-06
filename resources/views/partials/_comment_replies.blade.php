 @foreach($comments as $comment)
 <div class="col s12 m12 l12 hy-pos-view">
 	<div class="card card-hy-f komen" style="margin-left: 3em">
 		<div class="card-content">
 			<div class="row">

 				<div class="col s12 m12 l12 hy-title-list">
 					<ul class="collection user hy-user">
 						<li class="collection-item avatar">
 							<img src="https://materializecss.com/images/yuna.jpg" alt="" class="circle">
 							<span class="title user-post-hy">{{ $comment->user->nama }}</span>
 							<span class="title tgl-post-hy">{{ $comment->user->created_at }}</span>
 							<a href="#!" data-target='dropdown13' class="secondary-content dropdown-trigger"><i class="material-icons hy-color-7">more_horiz</i></a>
 						</li>
 					</ul>
 				</div>

 				<div class="col s12 m12 l12 content-text">
 					{{ $comment->body }}
 				</div>

 				<div class="col s12 m12 l12">
 					<div class="sub-footer-hy-post row valign-wrapper-hy">
 						<div class="col s12 m12 l6 komentar">
 							<a href="#!" class="text-atr-komen hy-who-like-btn">
 								<span>0</span><span> Komentar</span>
 							</a>
 						</div>
 					</div>
 					<div class="footer-hy-post row center-align">
 						<div class="col s6">
 							<a href="{{ route('UserLandingForumSubKomentar',[str_replace(" ", "-", $dat->judul),$comment->id]) }}" class='btn-large waves-effect btn-flat hy-btn-flat-4'><i class="material-icons left">add_comment</i>Komentar</a>
 						</div>
 						<div class="col s6">
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