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
		@if(Auth::guard('user')->check())
		<a href="#!" data-target="modal-laporkan" class="hy-color-5 modal-trigger">
			<i class="material-icons hy-color-5">error_outline</i>Laporkan Post
		</a>
		@else
		<a href="#!" data-target="modal-must-login" class="hy-color-5 modal-trigger">
			<i class="material-icons hy-color-5">error_outline</i>Laporkan Post
		</a>
		@endif
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