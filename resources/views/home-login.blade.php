@extends('aapp.app')

@section('title')
Login | Hycost
@endsection

@section('content-landing-page')
<section class="hy-b-color-3">
	<div class="container-login">
		<img src="">
		<div class="row">
			<div class="col s12 m12 l12">
				<div class="center">
					<img src="asset/img/hy-logo.png" style="width: 200px">
					<br>
					<br>
				</div>
				<div class="card hy-card-shad">
					<div class="card-content">
						<div class="center">
							<h5 class="hy-color-2">Sign In</h5>
							<p class="grey-text">Masukkan Email dan Password anda</p>
							<br>
						</div>

						<form action="" method="">
							<div class="input-field hy-infield">
								<input id="email" type="text" class="validate hy-input" name="email">
								<label class="hy-label" for="email">Email</label>
							</div>
							<div class="input-field hy-infield">
								<input id="password" type="password" class="validate hy-input" name="password">
								<label class="hy-label" for="password">Password</label>
							</div>
							<div class="input-field">
								<button type="submit" class="waves-effect waves-light btn hy-btn-bor-ijo-nav hy-btn-full">Sign In</button>
							</div>
							<div class="center">
								<a href="/regis" class="hy-color-2">Sign Up</a>
							</div>
						</form>

					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection
