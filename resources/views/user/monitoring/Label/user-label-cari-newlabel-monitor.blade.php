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

							{{-- Start Search On Mobile --}}
							<div class="search-cont-flek mobile-res">
								<div class="nav-wrapper">
									<form>
										<div class="input-field">
											<input id="myInputTextField2" type="search" placeholder="Cari disini" required>
											<label class="label-icon" for="search">
												<i class="material-icons">search</i>
											</label>
											<i class="material-icons">close</i>
										</div>
									</form>
								</div>
							</div>
							{{-- End Search On Mobile --}}

						</li>
						<li class="link">

							<div id="example_wrapper" class="col-sm-6"></div>

						</li>
						<li class="link">
							<a id="btn-tofill" onclick="toFill()" class="btn-floating waves-effect waves-light hy-btn-icon-flat tooltipped" data-position="bottom" data-tooltip="Filter">
								<i class="material-icons hy-color-2">filter_list</i>
							</a>

							<a id="btn-nofill" onclick="toNFill()" class="btn-floating waves-effect waves-light hy-b-color-8 hy-btn-icon-flat tooltipped" style="display: none" data-position="bottom" data-tooltip="Filter">
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

					<div id="fill" class="col s12 m12 l3 tabel-tran animated fadeIn faster filter-cont-2" style="display: none">
						<h6>Filter</h6>
						<div class="filter-container-2">
							<div class="row" style="margin-bottom: 0">

								<div class="col s12">
									<ul class="collapsible collap2">
										<li>
											<div class="collapsible-header collap2">
												Tanaman
												<i class="material-icons right">keyboard_arrow_down</i>
											</div>
											<div class="collapsible-body collapsible-np">
												<ul id="tanamancek" class="collection">
													<li class="collection-item">
														<label>
															<input name="sayur" type="checkbox" class="filled-in" value="Kangkung" />
															<span>Kangkung</span>
														</label>
													</li>
													<li class="collection-item">
														<label>
															<input name="sayur" type="checkbox" class="filled-in" value="Pakcoy" />
															<span>Pakcoy</span>
														</label>
													</li>
													<li class="collection-item">
														<label>
															<input name="sayur" type="checkbox" class="filled-in" value="Selada" />
															<span>Selada</span>
														</label>
													</li>
												</ul>
											</div>
										</li>
									</ul>
								</div>

								<div class="col s12">
									<ul class="collapsible collap2">
										<li>
											<div class="collapsible-header collap2">
												Jumlah Pemakai
												<i class="material-icons right">keyboard_arrow_down</i>
											</div>
											<div class="collapsible-body collapsible-np">
												<ul id="countcek" class="collection">
													<li class="collection-item">
														<label>
															<input name="jumlah" type="checkbox" class="filled-in" value="50" />
															<span>>= 50</span>
														</label>
													</li>
													<li class="collection-item">
														<label>
															<input name="jumlah" type="checkbox" class="filled-in" value="100" />
															<span>>= 100</span>
														</label>
													</li>
													<li class="collection-item">
														<label>
															<input name="jumlah" type="checkbox" class="filled-in" value="150" />
															<span>>= 150</span>
														</label>
													</li>
													<li class="collection-item">
														<label>
															<input name="jumlah" type="checkbox" class="filled-in" value="200" />
															<span>>= 200</span>
														</label>
													</li>
												</ul>
											</div>
										</li>
									</ul>
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

					<div id="tabelnya" class="col s12 m12 l12 web-res">
						<div>

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

					<div id="tabelnya" class="col s12 m12 l12 mobile-res">
						<div>

							<div id="tabel" class="animated fadeIn faster" style="display: block">
								<table id="example2" class="" style="width:100%">
									<thead>
										<tr>
											<th>Label</th>
											<th>Sayur</th>
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
			<div class="row bread-hy-cont animated fadeIn faster valign-wrapper-hy mobile-res">
				<div class="col s3">
					<ul class="hy-header-tols-2">
						<li class="link">
							<a id="btn-toList" onclick="toList()" class="btn-floating waves-effect waves-light hy-btn-icon-flat">
								<i class="material-icons hy-color-2">close</i>
							</a>
						</li>
					</ul>
				</div>
				<div class="col s9 valign">
					<ul class="hy-header-tols-2">
						<li class="right-align">
							<div class="title"><span id="namas2"></span></div>
						</li>
					</ul>		
				</div>

				<div class="col s12">
					<ul class="collection collect-table kanan">
						<li class="collection-item avatar">
							<img src="https://materializecss.com/images/yuna.jpg" alt="" class="circle">
							<span class="title">Tes</span>
						</li>
					</ul>
				</div>
			</div>

			<div class="row bread-hy-cont animated fadeIn faster valign-wrapper-hy web-res">
				<div class="col s12 m12 l6">
					<ul class="hy-header-tols-2">
						<li class="link">
							<a id="btn-toList" onclick="toList()" class="btn-floating waves-effect waves-light hy-btn-icon-flat">
								<i class="material-icons hy-color-2">close</i>
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
				'className': 'btn-floating waves-effect waves-light hy-btn-icon-flat btn-append tooltipped toto web-res',
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

					$('.toto').attr('data-tooltip', 'tabel view');

					$('.jmlh', $table).each(function () {
						$(this).addClass('data-juml');
					});

					$('.status-dat', $table).each(function () {
						$(this).addClass('data-status');
					});

					$('.nama-dat', $table).each(function () {
						$(this).addClass('data-nama');
					});

				} else {

					$('.toto').attr('data-tooltip', 'grid view');

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

		// $(document).ready(function() {
		// 	var table = $('#example').DataTable();

		// 	$('#min, #max').on('change', function () {
		// 		table.draw();
		// 	} );
		// } );

		var table4 =  $('#example').DataTable();
		var dataCount =[];
		$('#countcek').on('change', 'input[type="checkbox"]', function () {
			var dat = this.value;
			var dat2 = parseInt(dat);

			if (dat != null) {
				var dataAllAuth1 =[];
				table.column(0).nodes().to$().each(function(index) { 
					var data = table4.row($(this)).data();
					var row = data[ 'jumlah' ];
					dataAllAuth1.push(row);
				});

				var datafilter = dataAllAuth1.filter(function(number) {
					return number >= dat2 ;
				});
			}

			console.log(dat);

			if($(this).is(":checked")) {
				for (var i = 0; i < datafilter.length; i++) {
					dataCount.push(datafilter[i]);
				}
			} else {
				for (var i = 0; i < datafilter.length; i++) {
					dataCount = jQuery.grep(dataCount, function(value) {
						return value != datafilter[i];
					});
				}
			}

			table4.columns(2).search( dataCount.join('|'), true, false).draw();
		} );

		var table3 =  $('#example').DataTable();
		var dataAll =[];
		$('#tanamancek').on('change', 'input[type="checkbox"]', function () {
			var dat = this.value;

			if($(this).is(":checked")) {
				dataAll.push(dat);
			} else {
				dataAll = jQuery.grep(dataAll, function(value) {
					return value != dat;
				});
			}

			table3.columns(1).search( dataAll.join('|'), true, false).draw();
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

<script type="text/javascript">

	$(document).ready(function () {

		var table2 = $('#example2').DataTable({
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
				"targets": 2,
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
			{ "targets": 3,"data": "id", "visible": false }
			],


			'buttons': [ 
			{
				extend: 'copy',

				exportOptions: 
				{ columns: [':visible'], rows: [':visible']},

			},

			{
				'className': 'btn-floating waves-effect waves-light hy-btn-icon-flat btn-append tooltipped toto mobile-res',
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

					$('.toto').attr('data-tooltip', 'tabel view');

					$('.jmlh', $table).each(function () {
						$(this).addClass('data-juml');
					});

					$('.status-dat', $table).each(function () {
						$(this).addClass('data-status');
					});

					$('.nama-dat', $table).each(function () {
						$(this).addClass('data-nama');
					});

				} else {

					$('.toto').attr('data-tooltip', 'grid view');

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

		table2.buttons().container().appendTo( '#example_wrapper' );

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
			var table2 = $('#example2').DataTable();

			$('#min, #max').on('change', function () {
				table2.draw();
			} );
		} );

		var table2 =  $('#example2').DataTable();
		$('#dropdown1').on('change', function () {
			table2.columns(1).search( this.value ).draw();
		} );

		var table2 =  $('#example2').DataTable();
		$('#terbarucek').on('change', function () {
			if($(this).is(":checked")) {
				table2.order([4, 'asc']).draw();
			} else {
				table2.order([4, 'dsc']).draw();
			}
		} );

		$('#example2 tbody').on( 'click', 'button', function () { /////////////////////////////////// link
			var data = table2.row( $(this).parents('tr') ).data();
			window.location.href = "http://www.w3schools.com";
		} );

		$('#example2 tbody').on('click', 'td a.namaz', function () { ///////////////////////////// tab
			var data2 = table2.row($(this).parents('tr')).data();
			var namas2 = data2[ 'nama' ];
			console.log(namas2);
			document.getElementById("namas2").innerHTML = namas2;
		} );

		$("#hapus").on("click",function(){ /////////////////////////////////////////////////////////// hapus
			var oAll =[];
			$('#example tbody tr.selected').each(function(){
				var data = table2.row($(this)).data();
				var row = data[ 'id' ];
				oAll.push(row);
			});
			console.log(oAll);
			document.getElementById("datas2").innerHTML = oAll;
		});

		$('#status').click( function () { /////////////////////////////////////////////////////////// edit
			var data = table2.row('.selected').data();
			var number = data[ 'status' ];
			document.getElementById("datas").innerHTML = number;
		} );


		oTable = $('#example2').DataTable(); ////////////////////////////////////////////////////// search @Lionel 
		$('#myInputTextField2').keyup(function(){
			oTable.search($(this).val()).draw();
		})

		.on('select', function (e, dt, type, indexes) {
			var rowData = table2.rows(indexes).data().toArray()
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
