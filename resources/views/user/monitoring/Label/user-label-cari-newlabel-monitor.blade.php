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

<section>
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
											<th>Nama Label</th>
											<th>Author</th>
											<th></th>
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
@endsection

@section('js-plus')
<script type="text/javascript">
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
					console.log(data);
					data = jQuery.parseJSON(data);
					var html_to_append = '';
					$.each(data.data, function(i, item) {
						html_to_append +=
						'<div class="col s12 m12 l4">'+
						'<div class="card card-hy-f">'+
						'<div class="card-content center-align">'+
						'<p>'+item.nama+'</p>'+
						'</div>'+
						'</div>'+
						'</div>';
					});
					$("#items-container").html(html_to_append);
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
		function format ( d ) {

			return '<div class="animated fadeIn faster">'+

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
			{ "targets": 0,"data": "nama" },
			{ "targets": 1,"data": "author" },
			{
				"targets": 2,
				"data": null,
				"orderable": false,
				"defaultContent": "<button class='waves-effect btn-flat hy-btn-flat'>Pasang</button>"
			},
			{
				'targets': -1,
				"orderable":      false,
				"data":           null,
				"defaultContent": '<a class="ss btn-floating waves-effect waves-light hy-b-color-6 hy-btn-float"><i class="gg material-icons hy-color-2">keyboard_arrow_right</i></a>'
			}
			],

			select: false,
			
			'order': [[1, 'dsc']]
		} );


		$('#example tbody').on( 'click', 'button', function () { /////////////////////////////////// link
			var data = table.row( $(this).parents('tr') ).data();
			window.location.href = "http://www.w3schools.com";
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
