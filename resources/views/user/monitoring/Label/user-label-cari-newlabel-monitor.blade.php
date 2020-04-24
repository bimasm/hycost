@extends('aapp.app')

@section('title')
Cari Label Baru User
@endsection

@section('nav-user')
@include('user.app.nav-back')  
@endsection

@section('sidenav-user')
{{-- @include('user.app.side-nav') --}}
@endsection

@section('content-user')

<section id="list">
	<div class="content-hy-dash-add">
		<div class="container cont-hy-dash">

			{{-- Start Header --}}
			<div class="row bread-hy-cont animated fadeIn faster valign-wrapper-hy">

				<div class="col s12 m12 l7">
					{{--  Start Breadcumb --}}
					@include('user.app.breadcumb')
					{{--  End Breadcumb --}}
				</div>
				<div class="col s12 m12 l5 valign">
					<ul class="hy-header-tols">
						<li>
							{{-- Start Search On Web --}}
							<div class="search-cont web-res">
								<div class="nav-wrapper">
									<form>
										<div class="input-field">
											<input id="myInputTextField" type="search" placeholder="Cari disini" required>
											<label class="label-icon" for="search">
												<i class="material-icons">search</i>
											</label>
											<i class="material-icons">close</i>
										</div>
									</form>
								</div>
							</div>
							{{-- End Search On Web --}}
						</li>
						<li class="link">
							<a id="btn-toTable" onclick="toTable()" class="btn-floating waves-effect waves-light hy-btn-icon-flat" style="display: none">
								<i class="material-icons hy-color-2">view_list</i>
							</a>
							<a id="btn-toGrid" onclick="toGrid()" class="btn-floating waves-effect waves-light hy-btn-icon-flat">
								<i class="material-icons hy-color-2">view_module</i>
							</a>
						</li>
					</ul>
				</div>
			</div>
			{{-- End Header --}}

			{{-- Start Konten --}}
			<div class="cont-hy-dash-all animated fadeIn faster">
				<div class="row">
					<div class="col s12 m12 l3">a</div>
					<div class="col s12 m12 l9">

						<div class="web-res">

							<div id="tabel" class="animated fadeIn faster" style="display: block">
								<table id="example" class="" style="width:100%">
									<thead>
										<tr>
											<th>Label</th>
											<th>Sayur</th>
											<th>Pemakai</th>
											<th></th>
										</tr>
									</thead>
								</table>
							</div>

							<div id="grid" class="animated fadeIn faster" style="display: none">
								<div id="items-container" class="row"></div>
							</div>

						</div>
					</div>
				</div>
			</div>
			{{-- END Konten --}}

		</div>
	</div>
</section>

<section id="detail" style="display: none">
	<div class="content-hy-dash-add">
		<div class="container cont-hy-dash">

			{{-- Start Header --}}
			<div class="row bread-hy-cont animated fadeIn faster valign-wrapper-hy">

				<div class="col s12 m12 l6">
					<ul class="hy-header-tols-2">
						<li class="link">
							<a id="btn-toList" onclick="toList()" class="btn-floating waves-effect waves-light hy-btn-icon-flat">
								<i class="material-icons hy-color-2">keyboard_arrow_left</i>
							</a>
						</li>
						<li>
							<div class="title"><span id="namas"></span></div>
						</li>
					</ul>		
					
				</div>
				<div class="col s12 m12 l6 valign">
					<ul class="collection collect-table kanan">
						<li class="collection-item avatar">
							<img src="https://materializecss.com/images/yuna.jpg" alt="" class="circle">
							<span class="title">Tes</span>
						</li>
					</ul>
				</div>
			</div>
			{{-- End Header --}}

			{{-- Start Konten --}}
			<div class="cont-hy-dash-all animated fadeIn faster">
				<div class="row">

					<div class="col s12 m12 l8">
						<table>
							<tbody>
								<tr>
									<th>Status</th>
									<td>status</td>
								</tr>
								<tr>
									<th>Tanggal Pembuatan</th>
									<td>tanggak</td>
								</tr>
								<tr>
									<th>Jumlah Pemakai</th>
									<td>300 User</td>
								</tr>
							</tbody>
						</table>
						<p>
							Description is the pattern of narrative development that aims to make vivid a place, object, character, or group. Description is one of four rhetorical modes, along with exposition, argumentation, and narration. In practice it would be difficult to write literature that drew on just one of the four basic modes.

							Description is the pattern of narrative development that aims to make vivid a place, object, character, or group. Description is one of four rhetorical modes, along with exposition, argumentation, and narration. In practice it would be difficult to write literature that drew on just one of the four basic modes.

							Description is the pattern of narrative development that aims to make vivid a place, object, character, or group. Description is one of four rhetorical modes, along with exposition, argumentation, and narration. In practice it would be difficult to write literature that drew on just one of the four basic modes.
						</p>
					</div>

					<div class="col s12 m12 l4">

						<div class="col s12 m12 l12">
							<div class="card card-hy-f white">
								<div class="card-content" style="padding:20px">
									<div class="row valign-wrapper" style="margin-bottom:0">
										<div class="col s12 m12 l4 valign">aa</div>
										<div class="col s12 m12 l8">
											<div class="row" style="margin-bottom:0">
												<div class="col s12 m12 l6 center-align">
													Suhu Air
												</div>
												<div class="col s12 m12 l6 center-align">
													60
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="col s12 m12 l12">
							<div class="card card-hy-f white">
								<div class="card-content" style="padding:20px">
									<div class="row valign-wrapper" style="margin-bottom:0">
										<div class="col s12 m12 l4 valign">aa</div>
										<div class="col s12 m12 l8">
											<div class="row" style="margin-bottom:0">
												<div class="col s12 m12 l6 center-align">
													Suhu Air
												</div>
												<div class="col s12 m12 l6 center-align">
													60
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="col s12 m12 l12">
							<div class="card card-hy-f white">
								<div class="card-content" style="padding:20px">
									<div class="row valign-wrapper" style="margin-bottom:0">
										<div class="col s12 m12 l4 valign">aa</div>
										<div class="col s12 m12 l8">
											<div class="row" style="margin-bottom:0">
												<div class="col s12 m12 l6 center-align">
													Suhu Air
												</div>
												<div class="col s12 m12 l6 center-align">
													60
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="col s12 m12 l12">
							<div class="card card-hy-f white">
								<div class="card-content" style="padding:20px">
									<div class="row valign-wrapper" style="margin-bottom:0">
										<div class="col s12 m12 l4 valign">aa</div>
										<div class="col s12 m12 l8">
											<div class="row" style="margin-bottom:0">
												<div class="col s12 m12 l6 center-align">
													Suhu Air
												</div>
												<div class="col s12 m12 l6 center-align">
													60
												</div>
											</div>
										</div>
									</div>
								</div>
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
	function toDetail() {
		var x = document.getElementById("detail");
		var y = document.getElementById("list");

		var i = document.getElementById("btn-toDetail");
		var j = document.getElementById("btn-toList");

		if (x.style.display === "none" || i.style.display === "block") {
			x.style.display = "block";
			y.style.display = "none";

			j.style.display = "block";
			i.style.display = "none";
		}
	}

	function toList() {
		var y = document.getElementById("detail");
		var x = document.getElementById("list");

		var j = document.getElementById("btn-toDetail");
		var i = document.getElementById("btn-toList");

		if (x.style.display === "none" || i.style.display === "block") {
			x.style.display = "block";
			y.style.display = "none";

			j.style.display = "block";
			i.style.display = "none";
		}
	}

	function toGrid() {
		var x = document.getElementById("grid");
		var y = document.getElementById("tabel");

		var i = document.getElementById("btn-toGrid");
		var j = document.getElementById("btn-toTable");

		if (x.style.display === "none" || i.style.display === "block") {
			x.style.display = "block";
			y.style.display = "none";

			j.style.display = "block";
			i.style.display = "none";
		}
	}

	function toTable() {
		var y = document.getElementById("grid");
		var x = document.getElementById("tabel");

		var j = document.getElementById("btn-toGrid");
		var i = document.getElementById("btn-toTable");

		if (x.style.display === "none" || i.style.display === "block") {
			x.style.display = "block";
			y.style.display = "none";

			j.style.display = "block";
			i.style.display = "none";
		}
	}
</script>
<script type="text/javascript">
	$(function() {
		ajaxJS();
		function ajaxJS(e) {
			if (e) {
				e.preventDefault();
			}
			$.ajax({
				url: "{{asset('asset/js/tabel-label.js')}}",
				method: "GET",

				success: function(data) {
					data = jQuery.parseJSON(data);

					var html_to_append = '';
					$.each(data.data, function(i, item) {
						html_to_append +=
						'<div class="dat col s12 m12 l4">'+
						'<a id="btn-toDetail" onclick="toDetail()" class="namass">'+
						'<div class="card card-hy-f">'+
						'<div class="card-content center-align">'+
						'<p>'+item.nama+'</p>'+
						'</div>'+
						'</div>'+
						'</a>'+
						'</div>';
					});
					$("#items-container").html(html_to_append);

					$('#items-container').on('click', 'a.namass', function () {
						var data = html_to_append.row($(this).parents('.dat')).data();
						var namas = data['nama'];
						console.log(namas);
						document.getElementById("namas").innerHTML = namas;
					} );
				},

				error: function() {
					console.log(data);
				}
			});



		}



	});
</script>

<script type="text/javascript">

	$(document).ready(function() {
		var table = $('#example').DataTable( {

			"dom": 
			"<'row'<'col s12 m12 l12'tr>>" +
			"<'row'<'col s12 m12 l5'><'col s12 m12 l7'p>>",

			"ajax": {
				"url": "{{asset('asset/js/tabel-label.js')}}"
			},

			"columnDefs": [
			{ 
				"targets": 0,
				"data": "nama",
				render: function (data, type, row, meta) {
					return '<a onclick="toDetail()" id="btn-toDetail" class="namaz waves-effect btn-flat hy-btn-flat">'+data+'</a>';
				},
			},
			{ "targets": 1,"data": "sayur" },
			{ "targets": 2,"data": "jumlah","className": 'center-align' },
			{
				"targets": 3,
				"data": "status",
				"orderable": false,
				"className": 'center-align',
				render: function (data, type, row, meta) {

					if (data == "Off") {
						return '<button class="waves-effect btn-flat hy-btn-flat">Pasang</button>';
					} else{
						return '<button class="waves-effect btn-flat hy-btn-flat disabled">Terpasang</button>';
					}
					
				},
			}
			],

			select: false,
			
			'order': [[1, 'dsc']]
		} );


		$('#example tbody').on( 'click', 'button', function () { /////////////////////////////////// link
			var data = table.row( $(this).parents('tr') ).data();
			window.location.href = "http://www.w3schools.com";
		} );

		$('#example tbody').on('click', 'td a.namaz', function () { ///////////////////////////// tab
			var data = table.row($(this).parents('tr')).data();
			var namas = data[ 'nama' ];
			console.log(namas);
			document.getElementById("namas").innerHTML = namas;
		} );

		$("#hapus").on("click",function(){ /////////////////////////////////////////////////////////// hapus
			var oAll =[];
			$('#example tbody tr.selected').each(function(){
				var data = table.row($(this)).data();
				var row = data[ 'id' ];
				oAll.push(row);
			});
			console.log(oAll);
			document.getElementById("datas2").innerHTML = oAll;
		});

		$('#status').click( function () { /////////////////////////////////////////////////////////// edit
			var data = table.row('.selected').data();
			var number = data[ 'status' ];
			document.getElementById("datas").innerHTML = number;
		} );


		oTable = $('#example').DataTable(); ////////////////////////////////////////////////////// search @Lionel 
		$('#myInputTextField').keyup(function(){
			oTable.search($(this).val()).draw();
		})

	} );
</script>

<script>
	$(document).ready(function () {
		var xx = document.getElementById("status");
		var xy = document.getElementById("hapus");
		var xz = document.getElementById("datacek");

		$('#example').on('change', 'input[type="checkbox"]', function () {

			if($(this).is(":checked")) {
				$(this).parents('tr').addClass("selected");
			} else {
				$(this).parents('tr').removeClass("selected");
			}

			var countCheckedCheckboxes = $('#example').find('td input[type="checkbox"]:checked').length;

			if (countCheckedCheckboxes == 1) {
				xx.style.display = "block";
				xy.style.display = "block";
				xz.style.display = "block";
			} else if (countCheckedCheckboxes >= 2) {
				xx.style.display = "none";
				xy.style.display = "block";
				xz.style.display = "block";
			} else {
				xx.style.display = "none";
				xy.style.display = "none";
				xz.style.display = "none";
			}

			$('#text-datacek').text(countCheckedCheckboxes);
		});

	});
</script>
@endsection
