@extends('aapp.app')

@section('title')
Daftar | Hycost
@endsection

@section('nav-landing-page')
@include('aapp.nav-landing-page')
@endsection

@section('content-landing-page')
<section class="hy-b-color-3">
	<div class="container-regis">
		<img src="">
		<div class="row">
			<div class="col s12 m12 l12">
				<div class="card hy-card-shad">
					<div class="card-content">
						<div class="center">
							<h5 class="hy-color-2">Daftar</h5>
							<p class="grey-text">Buat akun baru anda</p>
							<br>
						</div>
						<form action="/regis" method="post">
							@csrf
							<div class="input-field hy-infield">
								<input id="nama" type="text" class="validate hy-input" name="nama">
								<label class="hy-label" for="nama">Nama</label>
							</div>
							<div class="input-field hy-infield">
								<input id="email" type="text" class="validate hy-input" name="email">
								<label class="hy-label" for="email">Email</label>
							</div>
							<div class="input-field hy-infield">
								<input id="password" type="password" class="validate hy-input" name="password">
								<label class="hy-label" for="password">Password</label>
							</div>
							<div class="input-field">
								<button type="submit" class="waves-effect waves-light btn hy-btn-bor-ijo-nav hy-btn-full">Daftar</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection
