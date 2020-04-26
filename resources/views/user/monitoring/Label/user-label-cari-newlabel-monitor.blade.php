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

<section id="list" style="">
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

							<div id="example_wrapper" class="col-sm-6"></div>

						</li>
						<li class="link">
							<a id="btn-tofill" onclick="toFill()" class="btn-floating waves-effect waves-light hy-btn-icon-flat">
								<i class="material-icons hy-color-2">filter_list</i>
							</a>

							<a id="btn-nofill" onclick="toNFill()" class="btn-floating waves-effect waves-light hy-b-color-8 hy-btn-icon-flat" style="display: none">
								<i class="material-icons hy-color-2">filter_list</i>
							</a>
						</li>
					</ul>
				</div>
			</div>
			{{-- End Header --}}

			{{-- Start Konten --}}
			<div class="cont-hy-dash-all animated fadeIn faster">
				<div class="row">

					<div id="fill" class="col s12 m12 l3 animated fadeIn faster" style="display: none">

						<div class="filter-container">
							<div class="row" style="margin-bottom: 0">
								<div class="input-field col s12 center-align">
									<select id="dropdown1">
										<option value="">Semua Sayur</option>
										<option value="Selada">Selada</option>
										<option value="Pakcoy">Pakcoy</option>
										<option value="Kangkung">Kangkung</option>
									</select>
									<label>Jenis Sayur</label>
								</div>

								<div class="input-field col s12 center-align">
									<select id="min" type="text">
										<option value="">Semua Jumlah</option>
										<option value="50"> >= 50</option>
										<option value="100"> >= 100</option>
										<option value="150"> >= 150</option>
										<option value="200"> >= 200</option>
									</select>
									<label>Minimal Jumlah Pengguna</label>
								</div>

								<div class="input-field col s12 left-align">
									<div>
										<label>
											<input id="terbarucek" type="checkbox" class="filled-in" />
											<span>Terbaru</span>
										</label>
									</div>
								</div>
							</div>
						</div>

					</div>

					<div id="tabelnya" class="col s12 m12 l12">
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

	function toFill() {
		var x = document.getElementById("fill");

		// var hh = document.getElementById("tabelnya");

		var i = document.getElementById("btn-tofill");
		var j = document.getElementById("btn-nofill");

		if (x.style.display === "none" || i.style.display === "block") {
			x.style.display = "block";

			$("#tabelnya").removeClass('l12');
			$("#tabelnya").addClass('tabel-w-fil');
			$("#tabelnya").addClass('l9');

			j.style.display = "block";
			i.style.display = "none";
		}
	}

	function toNFill() {
		var x = document.getElementById("fill");

		var j = document.getElementById("btn-tofill");
		var i = document.getElementById("btn-nofill");

		if (x.style.display === "none" || i.style.display === "block") {
			x.style.display = "none";

			$("#tabelnya").removeClass('l9');
			$("#tabelnya").addClass('l12');
			$("#tabelnya").removeClass('tabel-w-fil');

			j.style.display = "block";
			i.style.display = "none";
		}
	}

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

			j.style.display = "";
			i.style.display = "none";
		}
	}
</script>

<script type="text/javascript">

	$(document).ready(function () {

		var table = $('#example').DataTable({
			'dom':
			"<'row'<'col-sm-12 col-md-6'><'col-sm-12 col-md-6'<'float-md-right ml-2'B>>>" +
			"<'row'<'col-sm-12'tr>>" +
			"<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",

			'ajax': '{{asset('asset/js/tabel-label.js')}}',


			"columnDefs": [
			{ 
				"targets": 0,
				"data": "nama",
				"orderable": false,
				"className": 'nama-dat',
				render: function (data, type, row, meta) {
					return '<a onclick="toDetail()" id="btn-toDetail" class="namaz waves-effect btn-flat hy-btn-flat">'+data+'</a>';
				},
			},
			{ "targets": 1,"data": "sayur","orderable": false },
			{ 
				"targets": 2,"data": "jumlah",
				"orderable": false, 
				render: function (data, type, row, meta) {
					return '<span class="jmlh">'+data+' User</span>';
				},
			},
			{
				"targets": 3,
				"data": "status",
				"orderable": false,
				"className": 'status-dat center-align',
				render: function (data, type, row, meta) {

					if (data == "Off") {
						return '<button class="waves-effect btn-flat hy-btn-flat">Pasang</button>';
					} else{
						return '<button class="waves-effect btn-flat hy-btn-flat disabled">Terpasang</button>';
					}

				},
			},
			{ "targets": 4,"data": "id", "visible": false }
			],


			'buttons': [ 
			{
				extend: 'copy',

				exportOptions: 
				{ columns: [':visible'], rows: [':visible']},

			},

			{
				'className': 'btn-floating waves-effect waves-light hy-btn-icon-flat btn-append',
				'text': '<i class="hy-color-2 fa fa-th btn-append"></i>',
				'action': function (e, dt, node) {

					$(dt.table().node()).toggleClass('cards animated fadeIn faster');
					$('.fa', node).toggleClass(['fa-list', 'fa-th']);

					dt.draw('page');
				},
			}
			],

			'initComplete': function (settings, json) {
				$("button").removeClass("dt-button");
				$("div").removeClass("dt-buttons");
			},
			'drawCallback': function (settings) {
				var api = this.api();
				var $table = $(api.table().node());
				

				if ($table.hasClass('cards')) {

					$('.jmlh', $table).each(function () {
						$(this).addClass('data-juml');
					});

					$('.status-dat', $table).each(function () {
						$(this).addClass('data-status');
					});

					$('.nama-dat', $table).each(function () {
						$(this).addClass('data-nama');
					});

					// var labels = [];
					// $('thead th', $table).each(function () {
					// 	labels.push($(this).text());
					// });

					// $('tbody tr', $table).each(function () {
					// 	$(this).find('td').each(function (column) {
					// 		$(this).attr('data-label', labels[column]);
					// 	});
					// });

					// var max = 1;
					// $('tbody tr', $table).each(function () {
					// 	max = Math.max($(this).height(), max);
					// }).height(max);

				} else {

					$('.jmlh', $table).each(function () {
						$(this).removeClass('data-juml');
					});

					$('.status-dat', $table).each(function () {
						$(this).removeClass('data-status');
					});

					$('.nama-dat', $table).each(function () {
						$(this).removeClass('data-nama');
					});

					$('tbody td', $table).each(function () {
						$(this).removeAttr('data-label');
					});

					$('tbody tr', $table).each(function () {
						$(this).height('auto');
					});
				}
			}
		})

		table.buttons().container().appendTo( '#example_wrapper' );

		$.fn.dataTable.ext.search.push(
			function( settings, data, dataIndex ) {
				var min = parseInt( $('#min').val(), 10 );
				var max = parseInt( $('#max').val(), 10 );
				var age = parseFloat( data[2] ) || 0;

				if ( ( isNaN( min ) && isNaN( max ) ) ||
					( isNaN( min ) && age <= max ) ||
					( min <= age   && isNaN( max ) ) ||
					( min <= age   && age <= max ) )
				{
					return true;
				}
				return false;
			}
			);

		$(document).ready(function() {
			var table = $('#example').DataTable();

			$('#min, #max').on('change', function () {
				table.draw();
			} );
		} );

		var table =  $('#example').DataTable();
		$('#dropdown1').on('change', function () {
			table.columns(1).search( this.value ).draw();
		} );

		var table2 =  $('#example').DataTable();
		$('#terbarucek').on('change', function () {
			if($(this).is(":checked")) {
				table2.order([4, 'asc']).draw();
			} else {
				table2.order([4, 'dsc']).draw();
			}
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

		.on('select', function (e, dt, type, indexes) {
			var rowData = table.rows(indexes).data().toArray()
			$('#row-data').html(JSON.stringify(rowData));
		})
		.on('deselect', function () {
			$('#row-data').empty();
		})
	});
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
