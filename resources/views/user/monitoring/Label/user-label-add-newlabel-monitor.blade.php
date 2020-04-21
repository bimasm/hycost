@extends('aapp.app')

@section('title')
Tambah Label Baru User
@endsection

@section('nav-user')
@include('user.app.nav-user')  
@endsection

@section('sidenav-user')
@include('user.app.side-nav')
@endsection

@section('content-user')

<section>
	<div class="content-hy-dash">
		<div class="container cont-hy-dash">

			{{-- Start Header --}}
			<div class="row bread-hy-cont animated fadeIn faster valign-wrapper-hy">

				<div class="col s12 m12 l7 valign">
					{{--  Start Breadcumb --}}
					@include('user.app.breadcumb')
					{{--  End Breadcumb --}}
				</div>
				<div class="col s12 m12 l5">
					
				</div>
			</div>
			{{-- End Header --}}

			{{-- Start Konten --}}
			<div class="cont-hy-dash-all animated fadeIn faster">
				<div class="row">

					<div class="col s12 m12 l8">

						<div class="input-field hy-infield">
							<input placeholder="Nama Label" id="first_name" type="text" class="validate hy-input-border" name="judul">
						</div>

						<div class="card card-hy-f">
							<div class="card-content collap-card">
								<ul class="collapsible">
									<li>
										<div class="collapsible-header collap-head-last-nobt">
											<i class="material-icons">wallpaper</i>Suhu Air
											<a class="collap-second-item">
												<i class="material-icons icon-rot">keyboard_arrow_down</i>
											</a>
										</div>
										<div class="collapsible-body collap-body-last-nobt">
											<div class="row valign-wrapper-hy" style="margin-bottom: 0">
												<div class="col s12 m12 l6">a</div>
												<div class="col s12 m12 l6 valign">

													<div class="quantity">
														<input placeholder="Suhu Air" id="first_name" type="number" class="validate hy-input-border" name="judul" step="1" value="0">
													</div>

												</div>
											</div>
										</div>
									</li>
								</ul>
							</div>
						</div>

						<div class="card card-hy-f">
							<div class="card-content collap-card">
								<ul class="collapsible">
									<li>
										<div class="collapsible-header collap-head-last-nobt">
											<i class="material-icons">wallpaper</i>Suhu Ruangan
											<a class="collap-second-item">
												<i class="material-icons icon-rot">keyboard_arrow_down</i>
											</a>
										</div>
										<div class="collapsible-body collap-body-last-nobt">
											a
										</div>
									</li>
								</ul>
							</div>
						</div>

						<div class="card card-hy-f">
							<div class="card-content collap-card">
								<ul class="collapsible">
									<li>
										<div class="collapsible-header collap-head-last-nobt">
											<i class="material-icons">wallpaper</i>Volume Air
											<a class="collap-second-item">
												<i class="material-icons icon-rot">keyboard_arrow_down</i>
											</a>
										</div>
										<div class="collapsible-body collap-body-last-nobt">
											a
										</div>
									</li>
								</ul>
							</div>
						</div>

						<div class="card card-hy-f">
							<div class="card-content collap-card">
								<ul class="collapsible">
									<li>
										<div class="collapsible-header collap-head-last-nobt">
											<i class="material-icons">wallpaper</i>Kandungan Air
											<a class="collap-second-item">
												<i class="material-icons icon-rot">keyboard_arrow_down</i>
											</a>
										</div>
										<div class="collapsible-body collap-body-last-nobt">
											a
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>

					<div class="col s12 m12 l4">
						<div class="card card-hy-f">
							<div class="card-content">
								
								<p>
									<label>
										<input type="checkbox" class="filled-in" />
										<span>Publikasikan ke umum</span>
									</label>
								</p>

							</div>
						</div>
					</div>

				</div>
			</div>
			{{-- END Konten --}}

		</div>
	</div>
</section>
@endsection

@section('js-plus')
<script type="text/javascript">

	jQuery('<div class="quantity-nav"><div class="quantity-button quantity-up">+</div><div class="quantity-button quantity-down">-</div></div>').insertAfter('.quantity input');

	jQuery('.quantity').each(function() {
		var spinner = jQuery(this),
		input = spinner.find('input[type="number"]'),
		btnUp = spinner.find('.quantity-up'),
		btnDown = spinner.find('.quantity-down'),
		min = input.attr('min'),
		max = input.attr('max');

		btnUp.click(function() {
			var oldValue = parseFloat(input.val());
			if (oldValue >= max) {
				var newVal = oldValue;
			} else {
				var newVal = oldValue + 1;
			}
			spinner.find("input").val(newVal);
			spinner.find("input").trigger("change");
		});

		btnDown.click(function() {
			var oldValue = parseFloat(input.val());
			if (oldValue <= min) {
				var newVal = oldValue;
			} else {
				var newVal = oldValue - 1;
			}
			spinner.find("input").val(newVal);
			spinner.find("input").trigger("change");
		});

	});
</script>
@endsection
