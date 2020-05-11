@extends('aapp.app')

@section('title')
Label Monitoring User
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

				<div class="col s12 m12 l6 valign">
					{{--  Start Breadcumb --}}
					@include('user.app.breadcumb')
					{{--  End Breadcumb --}}
				</div>
				<div class="col s12 m12 l6">
					{{-- Start Search On Mobile --}}
					<div class="search-cont mobile-res">
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

					<ul class="hy-header-tols web-res">
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
							<div class="web-res">
								<a href="#modal-add-label" class='waves-effect btn-flat hy-btn-flat-2 modal-trigger'><i class="material-icons left">add</i>Label Baru</a>
							</div>
						</li>
					</ul>
					{{-- Start Search On Web --}}
					
				</div>
			</div>
			{{-- End Header --}}

			{{-- Start Action Tabel --}}
			<div class="cont-hy-action-tb web-res">
				<div id="datacek" class="hy-b-color-6 animated fadeIn faster" style="display: none;">

					<div class="row valign-wrapper-hy">
						{{-- Start Indikator Row Terpilih --}}
						<div class="col s12 m12 l6 valign">
							<div class="cont-hy-action-count">
								<span id="text-datacek"></span> terpilih
							</div>
						</div>
						{{-- End Indikator Row Terpilih --}}
						<div class="col s12 m12 l6">
							<ul>
								<li>
									<button id="hapus" href="#modal2" class='waves-effect btn-flat hy-btn-flat modal-trigger'>
										<i class="material-icons left">delete</i>Hapus
									</button>
								</li>
								<li>
									<button id="status" href="#modal1" class='waves-effect btn-flat hy-btn-flat modal-trigger'>
										<i class="material-icons left">edit</i>Edit
									</button>
								</li>
							</ul>
						</div>
					</div>

				</div>
			</div>
			{{-- End Action Tabel --}}

			{{-- Start Tabel --}}
			<div class="cont-hy-dash-all animated fadeIn faster">
				<div class="row">

					<div class="col s12 m12 l12">
						{{-- Start Tabel Web Version --}}
						<div class="web-res">
							<table id="example" class="" style="width:100%">
								<thead>
									<tr>
										<th style="width: 8%"></th>
										<th>Nama Label</th>
										<th>Status</th>
										<th>Tanaman</th>
										<th></th>
										<th></th>
										<th></th>
									</tr>
								</thead>
							</table>
						</div>
						{{-- End Tabel Web Version --}}

						{{-- Start Tabel Mobile Version --}}
						<div class="mobile-res">
							<table id="example2"class="highlight" style="width:100%">
								<thead>
									<tr>
										<th style="width: 8%"></th>
										<th>Judul</th>
										<th>Status</th>
									</tr>
								</thead>
							</table>
						</div>
						{{-- End Tabel Mobile Version --}}

					</div>

				</div>
			</div>
			{{-- End Tabel --}}

		</div>
	</div>
</section>

<div id="modal1" class="modal">
	<div class="modal-content">
		<h4>Modal Header</h4>
		<h1><span id="datas"></span></h1>
	</div>
	<div class="modal-footer">
		<a href="#!" class="modal-close waves-effect waves-green btn-flat">Agree</a>
	</div>
</div>

<div id="modal2" class="modal">
	<div class="modal-content">
		<h4>Modal Header 2</h4>
		<h1><span id="datas2"></span></h1>
	</div>
	<div class="modal-footer">
		<a href="#!" class="modal-close waves-effect waves-green btn-flat">Agree</a>
	</div>
</div>

@include('user.app.modal-label')
@endsection

@section('js-plus')

{{-- jquery tampilan web --}}
<script type="text/javascript">

	$(document).ready(function() {
		function format ( d ) {

			return '<div class="detail-tabel animated fadeIn faster">'+

			'<div class="row">'+
			'<div class="col s12 m12 l6">'+

			'<div class="col s12 m12 l12">'+
			'<div class="card card-hy-f white"><div class="card-content" style="padding:20px">'+
			'<div class="row valign-wrapper" style="margin-bottom:0">'+
			'<div class="col s12 m12 l4 valign">aa</div>'+
			'<div class="col s12 m12 l8">'+
			'<div class="row" style="margin-bottom:0">'+
			'<div class="col s12 m12 l6 center-align">'+
			'Suhu Air'+
			'</div>'+
			'<div class="col s12 m12 l6 center-align">'+
			'60'+
			'</div>'+
			'</div>'+
			'</div>'+
			'</div>'+
			'</div></div>'+
			'</div>'+

			'<div class="col s12 m12 l12">'+
			'<div class="card card-hy-f white"><div class="card-content" style="padding:20px">'+
			'<div class="row valign-wrapper" style="margin-bottom:0">'+
			'<div class="col s12 m12 l4 valign">aa</div>'+
			'<div class="col s12 m12 l8">'+
			'<div class="row" style="margin-bottom:0">'+
			'<div class="col s12 m12 l6 center-align">'+
			'Suhu Air'+
			'</div>'+
			'<div class="col s12 m12 l6 center-align">'+
			'60'+
			'</div>'+
			'</div>'+
			'</div>'+
			'</div>'+
			'</div></div>'+
			'</div>'+

			'<div class="col s12 m12 l12">'+
			'<div class="card card-hy-f white"><div class="card-content" style="padding:20px">'+
			'<div class="row valign-wrapper" style="margin-bottom:0">'+
			'<div class="col s12 m12 l4 valign">aa</div>'+
			'<div class="col s12 m12 l8">'+
			'<div class="row" style="margin-bottom:0">'+
			'<div class="col s12 m12 l6 center-align">'+
			'Suhu Air'+
			'</div>'+
			'<div class="col s12 m12 l6 center-align">'+
			'60'+
			'</div>'+
			'</div>'+
			'</div>'+
			'</div>'+
			'</div></div>'+
			'</div>'+

			'<div class="col s12 m12 l12">'+
			'<div class="card card-hy-f white"><div class="card-content" style="padding:20px">'+
			'<div class="row valign-wrapper" style="margin-bottom:0">'+
			'<div class="col s12 m12 l4 valign">aa</div>'+
			'<div class="col s12 m12 l8">'+
			'<div class="row" style="margin-bottom:0">'+
			'<div class="col s12 m12 l6 center-align">'+
			'Suhu Air'+
			'</div>'+
			'<div class="col s12 m12 l6 center-align">'+
			'60'+
			'</div>'+
			'</div>'+
			'</div>'+
			'</div>'+
			'</div></div>'+
			'</div>'+

			'</div>'+
			'<div class="col s12 m12 l6">'+
			
			'<table>'+
			'<tbody>'+

			'<tr>'+
			'<th>Status</th>'+
			'<td>'+d.status+'</td>'+
			'</tr>'+

			'<tr>'+
			'<th>Tanggal Pemasangan</th>'+
			'<td>'+d.tanggal+'</td>'+
			'</tr>'+

			'<tr>'+
			'<th>Jumlah Pemakai</th>'+
			'<td>300 User</td>'+
			'</tr>'+

			'<tr>'+
			'<th>Aktif Pada Kebun</th>'+
			'<td>Kebun A</td>'+
			'</tr>'+

			'</tbody>'+
			'</table>'+

			'</div>'+
			'</div>'+

			'</div>';
		}

		var table = $('#example').DataTable( {

			"dom": 
			"<'row'<'col s12 m12 l12'tr>>" +
			"<'row'<'col s12 m12 l5'><'col s12 m12 l7'p>>",

			"ajax": {
				"url": "{{asset('asset/js/tabel-label.js')}}"
			},

			"columnDefs": [
			{
				
				'targets': 0,
				"data" : "id",
				render: function (data, type, row, meta) {
					if (type === "display") {
						data = '<div class="checkbox"><input type="checkbox" class="dt-checkboxes filled-in"><span style="top:5px"></span></div>';
					}
					return data;
				},
				'checkboxes': {
					'selectRow': false,
					'selectAllRender': '<div class="checkbox"><input type="checkbox" class="filled-in"><span style="top:5px"></span></div>'
				}
			},
			{ 
				"targets": 1,
				"data": {nama : "nama", author : "author"},
				mRender : function(data, type, full) {
					return data.nama+'<br>'+'<div class="grey-text text-darken-1">'+data.author+'</div>'; 
				},  
			},
			{ 
				"targets": 2,
				"data": "status",
				render: function (data, type, row) {
					if (data == "On") {
						return '<div class="pulse-cont-tyni-on btn-floating pulse"></div><span class="hy-color-2">'+data+'</span>';
					} else {
						return '<div class="pulse-cont-tyni-off btn-floating"></div><span class="grey-text">'+data+'</span>';
					}
				}, 
			},
			{ "targets": 3,"data": "sayur" },
			{
				"targets": 4,
				"data": null,
				"orderable": false,
				"defaultContent": "<a data-target='modal-label' class='btn-detail waves-effect btn-flat hy-btn-flat modal-trigger'>Lihat Detail</a>"
			},
			{ "visible": false, "targets": 5,"data": "tanggal" },
			{
				'targets': -1,
				"orderable":      false,
				"data":           null,
				"defaultContent": '<a class="ss btn-floating waves-effect waves-light hy-b-color-6 hy-btn-float"><i class="gg material-icons hy-color-2">keyboard_arrow_right</i></a>'
			},
			],

			// rowCallback: function(row, data, index) {
			// 	if (data.status == "On") {
			// 		$(row).addClass("tabel-on-label");
			// 	}
			// },

			select: false,
			
			'order': [[1, 'dsc']]
		} );


		$('#example tbody').on( 'click', 'a.btn-detail', function () { /////////////////////////////////// link
			var data = table.row( $(this).parents('tr') ).data();
			var nama = data[ 'nama' ];
			document.getElementById("nama-label").innerHTML = nama;
			window.location.href = "#!";
		} );

		$('#example tbody').on('click', 'td a.ss', function () { ///////////////////////////// tab
			var tr = $(this).closest('tr');
			var row = table.row( tr );

			if ( row.child.isShown() ) {

				row.child.hide();
				tr.removeClass('grey hy-b-color-6');
				tr.removeClass('shown');
			}
			else {

				row.child( format(row.data()) ).show();
				tr.addClass('grey hy-b-color-6');
				tr.addClass('shown');
			}
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

{{-- jquery tampilan mobile --}}
<script type="text/javascript">
	$(document).ready(function() {
		function format ( d ) {

			return '<div class="detail-tabel animated fadeIn faster">'+

			'<div class="row">'+
			'<div class="col s12 m12 l12">'+

			'<div class="col s12 m12 l12">'+
			'<div class="card card-hy-f white"><div class="card-content" style="padding:20px">'+
			'<div class="row valign-wrapper" style="margin-bottom:0">'+
			'<div class="col s12 m12 l4 valign">aa</div>'+
			'<div class="col s12 m12 l8">'+
			'<div class="row" style="margin-bottom:0">'+
			'<div class="col s12 m12 l6 center-align">'+
			'Suhu Air'+
			'</div>'+
			'<div class="col s12 m12 l6 center-align">'+
			'60'+
			'</div>'+
			'</div>'+
			'</div>'+
			'</div>'+
			'</div></div>'+
			'</div>'+

			'<div class="col s12 m12 l12">'+
			'<div class="card card-hy-f white"><div class="card-content" style="padding:20px">'+
			'<div class="row valign-wrapper" style="margin-bottom:0">'+
			'<div class="col s12 m12 l4 valign">aa</div>'+
			'<div class="col s12 m12 l8">'+
			'<div class="row" style="margin-bottom:0">'+
			'<div class="col s12 m12 l6 center-align">'+
			'Suhu Air'+
			'</div>'+
			'<div class="col s12 m12 l6 center-align">'+
			'60'+
			'</div>'+
			'</div>'+
			'</div>'+
			'</div>'+
			'</div></div>'+
			'</div>'+

			'<div class="col s12 m12 l12">'+
			'<div class="card card-hy-f white"><div class="card-content" style="padding:20px">'+
			'<div class="row valign-wrapper" style="margin-bottom:0">'+
			'<div class="col s12 m12 l4 valign">aa</div>'+
			'<div class="col s12 m12 l8">'+
			'<div class="row" style="margin-bottom:0">'+
			'<div class="col s12 m12 l6 center-align">'+
			'Suhu Air'+
			'</div>'+
			'<div class="col s12 m12 l6 center-align">'+
			'60'+
			'</div>'+
			'</div>'+
			'</div>'+
			'</div>'+
			'</div></div>'+
			'</div>'+

			'<div class="col s12 m12 l12">'+
			'<div class="card card-hy-f white"><div class="card-content" style="padding:20px">'+
			'<div class="row valign-wrapper" style="margin-bottom:0">'+
			'<div class="col s12 m12 l4 valign">aa</div>'+
			'<div class="col s12 m12 l8">'+
			'<div class="row" style="margin-bottom:0">'+
			'<div class="col s12 m12 l6 center-align">'+
			'Suhu Air'+
			'</div>'+
			'<div class="col s12 m12 l6 center-align">'+
			'60'+
			'</div>'+
			'</div>'+
			'</div>'+
			'</div>'+
			'</div></div>'+
			'</div>'+

			'</div>'+
			'<div class="col s12 m12 l12">'+
			
			'<table>'+
			'<tbody>'+

			'<tr>'+
			'<th>Author</th>'+
			'<td>'+d.author+'</td>'+
			'</tr>'+

			'<tr>'+
			'<th>Tanggal Pemasangan</th>'+
			'<td>'+d.tanggal+'</td>'+
			'</tr>'+

			'<tr>'+
			'<th>Jumlah Pemakai</th>'+
			'<td>300 User</td>'+
			'</tr>'+

			'</tbody>'+
			'</table>'+

			'</div>'+
			'</div>'+

			'</div>';
		}

		var table2 = $('#example2').DataTable( {

			"dom": 
			"<'row'<'col s12 m12 l12'tr>>" +
			"<'row'<'col s12 m12 l5'><'col s12 m12 l7'p>>",

			"ajax": {
				"url": "{{asset('asset/js/tabel-label.js')}}"
			},

			"columnDefs": [
			{
				'targets': 0,
				"className":      'details-control',
				"orderable":      false,
				"data":           null,
				"defaultContent": ''
			},
			{ "targets": 1,"data": "nama" },
			{ "targets": 2,"data": "status" },
			],

			'order': [[1, 'dsc']]
		} );

		oTable2 = $('#example2').DataTable();   //pay attention to capital D, which is mandatory to retrieve "api" datatables' object, as @Lionel said
		$('#myInputTextField2').keyup(function(){
			oTable2.search($(this).val()).draw();
		})

		$('#example2 tbody').on('click', 'td.details-control', function () {
			var tr = $(this).closest('tr');
			var row = table2.row( tr );

			if ( row.child.isShown() ) {

				row.child.hide();
				tr.removeClass('shown');
			}
			else {

				row.child( format(row.data()) ).show();
				tr.addClass('shown');
			}
		} );

		$('#example2 tbody').on( 'click', 'button', function () {
			var data = table2.row( $(this).parents('tr') ).data();
			window.location.href = "http://www.w3schools.com";
		} );

		$('#hapus').click( function () {
			var rows_selected = table2.column(0).checkboxes.selected();
			$.each(rows_selected, function(index, rowId){
				table2.row('.selected').remove().draw( false );
			});

		} );

		$('#status').click( function () {
			var data = table2.row('.selected').data();
			var number = data[ 3 ];
			document.getElementById("datas").innerHTML = number;
		} );

	} );
</script>

{{-- jquery checkbox triger button --}}
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
