
{{-- Start -  Foto --}}
<div id="edit-foto" class="modal white" style="width: 30%">
	<form action="" method="">
		@csrf
		<div class="modal-header header-nf">

			<div class="row modal-header-cont-nf valign-wrapper">
				<div class="col s10 left-align">
					<h5 class="hy-color-2">Edit Foto</h5>
				</div>
				<div class="col s2 valign">
					<a class="modal-action modal-close btn-floating waves-effect waves-light hy-b-color-6 hy-btn-float"><i class="material-icons hy-color-2">close</i></a>
				</div>
			</div>

		</div>
		<div class="modal-content">
			<div class="row">
				<div class="file-field input-field">
					<div class="btn">
						<span>Foto Profil</span>
						<input type="file" multiple>
					</div>
					<div class="file-path-wrapper">
						<input class="file-path validate" type="text" placeholder="Upload Foto Baru">
					</div>
				</div>
			</div>
		</div>
		<div class="modal-footer white">
			<a href="#!" class='modal-close waves-effect btn-flat hy-btn-flat hy-color-6'>Batal</a>
			<button class='waves-effect btn-flat hy-btn-flat'>Simpan</button>
		</div>
	</form>
</div>
{{-- End - Foto --}}

{{-- Start -  Nama --}}
<div id="edit-nama" class="modal white" style="width: 30%">
	<form action="" method="">
		@csrf
		<div class="modal-header header-nf">
			<div class="row modal-header-cont-nf valign-wrapper">
				<div class="col s10 left-align">
					<h5 class="hy-color-2">Edit Nama</h5>
				</div>
				<div class="col s2 valign">
					<a class="modal-action modal-close btn-floating waves-effect waves-light hy-b-color-6 hy-btn-float"><i class="material-icons hy-color-2">close</i></a>
				</div>
			</div>
		</div>

		<div class="modal-content">
			<div class="row">
				<div class="input-field col s12">
					<input id="last_name" type="text" class="validate">
					<label for="last_name">Nama</label>
				</div>
			</div>
		</div>
		<div class="modal-footer white">
			<a href="#!" class='modal-close waves-effect btn-flat hy-btn-flat hy-color-6'>Batal</a>
			<button class='waves-effect btn-flat hy-btn-flat'>Simpan</button>
		</div>
	</form>
</div>
{{-- End - Nama --}}

{{-- Start -  JK --}}
<div id="edit-jeniskelamin" class="modal white" style="width: 30%">
	<form action="" method="">
		@csrf
		<div class="modal-header header-nf">
			<div class="row modal-header-cont-nf valign-wrapper">
				<div class="col s10 left-align">
					<h5 class="hy-color-2">Jenis Kelamin</h5>
				</div>
				<div class="col s2 valign">
					<a class="modal-action modal-close btn-floating waves-effect waves-light hy-b-color-6 hy-btn-float"><i class="material-icons hy-color-2">close</i></a>
				</div>
			</div>
		</div>
		<div class="modal-content">
			<div class="row">
				<div class="input-field col s12">
					<select>
						<option value="" disabled selected>Pilih jenis kelamin anda</option>
						<option value="laki-laki">Laki-laki</option>
						<option value="perempuan">Perempuan</option>
					</select>
					<label>Jenis Kelamin</label>
				</div>
			</div>
		</div>
		<div class="modal-footer white">
			<a href="#!" class='modal-close waves-effect btn-flat hy-btn-flat hy-color-6'>Batal</a>
			<button class='waves-effect btn-flat hy-btn-flat'>Simpan</button>
		</div>
	</form>
</div>
{{-- End - JK --}}

{{-- Start -  Password --}}
<div id="edit-password" class="modal white" style="width: 30%">
	<form action="" method="">
		@csrf
		<div class="modal-header header-nf">
			<div class="row modal-header-cont-nf valign-wrapper">
				<div class="col s10 left-align">
					<h5 class="hy-color-2">Edit Password</h5>
				</div>
				<div class="col s2 valign">
					<a class="modal-action modal-close btn-floating waves-effect waves-light hy-b-color-6 hy-btn-float"><i class="material-icons hy-color-2">close</i></a>
				</div>
			</div>
		</div>
		<div class="modal-content">
			<div class="row">
				<div class="input-field col s12">
					<input id="last_name" type="password" class="validate">
					<label for="last_name">Password</label>
				</div>
			</div>
		</div>
		<div class="modal-footer white">
			<a href="#!" class='modal-close waves-effect btn-flat hy-btn-flat hy-color-6'>Batal</a>
			<button class='waves-effect btn-flat hy-btn-flat'>Simpan</button>
		</div>
	</form>
</div>
{{-- End - Password --}}

{{-- Start -  Email --}}
<div id="edit-email" class="modal white" style="width: 30%">
	<form action="" method="">
		@csrf
		<div class="modal-header header-nf">
			<div class="row modal-header-cont-nf valign-wrapper">
				<div class="col s10 left-align">
					<h5 class="hy-color-2">Edit Email</h5>
				</div>
				<div class="col s2 valign">
					<a class="modal-action modal-close btn-floating waves-effect waves-light hy-b-color-6 hy-btn-float"><i class="material-icons hy-color-2">close</i></a>
				</div>
			</div>
		</div>
		<div class="modal-content">
			<div class="row">
				<div class="input-field col s12">
					<input id="last_name" type="email" class="validate">
					<label for="last_name">Email</label>
				</div>
			</div>
		</div>
		<div class="modal-footer white">
			<a href="#!" class='modal-close waves-effect btn-flat hy-btn-flat hy-color-6'>Batal</a>
			<button class='waves-effect btn-flat hy-btn-flat'>Simpan</button>
		</div>
	</form>
</div>
{{-- End - Email --}}

{{-- Start -  NoHp --}}
<div id="edit-notelepon" class="modal white" style="width: 30%">
	<form action="" method="">
		@csrf
		<div class="modal-header header-nf">
			<div class="row modal-header-cont-nf valign-wrapper">
				<div class="col s10 left-align">
					<h5 class="hy-color-2">Edit No Telepon</h5>
				</div>
				<div class="col s2 valign">
					<a class="modal-action modal-close btn-floating waves-effect waves-light hy-b-color-6 hy-btn-float"><i class="material-icons hy-color-2">close</i></a>
				</div>
			</div>
		</div>
		<div class="modal-content">
			<div class="row">
				<div class="input-field col s12">
					<input id="last_name" type="number" class="validate">
					<label for="last_name">No Telepon</label>
				</div>
			</div>
		</div>
		<div class="modal-footer white">
			<a href="#!" class='modal-close waves-effect btn-flat hy-btn-flat hy-color-6'>Batal</a>
			<button class='waves-effect btn-flat hy-btn-flat'>Simpan</button>
		</div>
	</form>
</div>
{{-- End - NoHP --}}