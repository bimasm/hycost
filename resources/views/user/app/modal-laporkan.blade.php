@if(Auth::guard('user')->check())
<div id="modal-laporkan" class="modal white" style="width: 40%">
	<div class="modal-content center-align">
		<h5>Laporkan Post</h5>
	</div>
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

	<div class="modal-footer white">
		<a href="#!" class='modal-close waves-effect btn-flat hy-btn-flat hy-color-6'>Batal</a>
	</div>
</div>
@endif

<div id="modal-must-login" class="modal white" style="width: 25%">
	<div class="modal-content" style="padding: 35px">
		<div class="">
			<h5 class="hy-color-2">Mau Beraktivitas ?</h5>
			<h6 class="hy-color-2">Login dulu SLurr</h6>
			<br>
		</div>

		<form action="/loginEW" method="post">
			@csrf
			<div class="input-field hy-infield">
				<input id="email" type="text" class="validate hy-input" name="email">
				<label class="hy-label" for="email">Email</label>
			</div>
			<div class="input-field hy-infield">
				<input id="password" type="password" class="validate hy-input" name="password">
				<label class="hy-label" for="password">Password</label>
			</div>
			<div class="input-field">
				<button type="submit" class='waves-effect btn-flat hy-btn-flat-2' style="width: 100%">Masuk</button>
			</div>
			<div class="center">
				<a href="/regis" class="hy-color-2">Daftar</a>
			</div>
		</form>
	</div>
</div>