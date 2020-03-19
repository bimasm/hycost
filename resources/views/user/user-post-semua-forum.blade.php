@extends('aapp.app')

@section('title')
Post Forum User
@endsection

@section('css-plus')
<link href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/select/1.3.1/css/select.dataTables.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/buttons/1.6.1/css/buttons.dataTables.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="{{asset('asset/css/dataTables.checkboxes.css')}}">
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

			{{--  Start Breadcumb --}}
			@include('user.app.breadcumb')
			{{--  End Breadcumb --}}

			<div class="cont-hy-dash-all">
				<div class="row">

					{{-- <div class="col s12 m12 l12">
						<div class="alert-hy">
							<div class="alert">
								<span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
								<div class="row no-mar">
									<div class="col s12 m12 l2">a</div>
									<div class="col s12 m12 l8">
										<div class="cont-alert-hy">
											Sekarang anda masih menggunakan Akun Reguler, aktifkan Akun Premium untuk mendapatkan layanan Monitoring Kebun Hidroponik anda dengan cepat dan mudah.
										</div>
										<a class="waves-effect waves-light btn" style="background-color: #56b2b2">Pasang Perangkat Sekarang</a>
									</div>
								</div>
							</div>
						</div>
					</div> --}}

					<div class="col s12 m12 l12">

						{{-- <div class="tes-45"><p>This is a paragraph.</p></div>

						<p class="btn1">Hide</p>
						<p class="btn2">Show</p> --}}

						<button class="waves-effect waves-light btn hmmm" id="button">Hapus</button>
						{{-- <button id="status">Modal</button> --}}

						<button id="status" class="waves-effect waves-light btn modal-trigger" href="#modal1">Ubah Status</button>

						<table id="example" style="width:100%">
							<thead>
								<tr>
									<th></th>
									<th>Judul</th>
									<th>Tag</th>
									<th>Status</th>
									<th>Tanggal</th>
									<th></th>
								</tr>
							</thead>
							<tfoot>
								<tr>
									<th></th>
									<th>Judul</th>
									<th>Tag</th>
									<th>Status</th>
									<th>Tanggal</th>
									<th></th>
								</tr>
							</tfoot>
						</table>
					</div>

				</div>
			</div>

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
@endsection

@section('js-plus')

<script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/select/1.3.1/js/dataTables.select.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.1/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="{{asset('asset/js/dataTables.checkboxes.js')}}"></script>

<script type="text/javascript">

	$(document).ready(function(){
		$('.modal').modal();
	});

	// $(document).ready(function() {

	// 	var $submit = $("#button").hide(),

	// 	$cbs = $('input[name="prog"]').click(function() {
	// 		$submit.toggle( $cbs.is(":checked") );
	// 	});
	// });

	// $(document).ready(function() {

	// 	var $submit = $("#button").hide(),
	// 	$cbs = $('tr.odd').click(function() {
	// 		$submit.toggle( $cbs.is(".odd.selected") );
	// 	});

	// });

	$(document).ready(function(){
		
		

	});

	// $(function () {
	// 	$(".dt-checkboxes").click(function () {
	// 		if ($(this).is(":checked")) {
	// 			$(".hmmm").show();
	// 		} else {
	// 			$(".hmmm").hide();
	// 		}
	// 	});
	// });

	// $(document).ready(function() {

	// 	// var $submit = $("#button").hide(),
	// 	// $cbs = $('tr[class="odd"]').click(function() {
	// 	// 	$submit.toggle( $cbs.is('tr[class="odd selected"]') );
	// 	// });

	// 	// $("tr.btn1").click(function(){
	// 	// 	$("#button").show();
	// 	// });

	// 	$(document).ready(function(){

	// 		// $("tbody").click(function(){
	// 		// 	$(".hmmm").hide();
	// 		// });
	// 		// $(".odd").click(function(){
	// 		// 	$(".tes-45").show();
	// 		// });

	// 		$('.dt-checkboxes').click(function() {
	// 			if( $(this).is(':checked')) {
	// 				$("#button").show();
	// 			} else {
	// 				$("#button").hide();
	// 			}
	// 		});


	// 	});

	// });

	// $(document).ready(function() {
	// 	var aa = $("#button").hide(),

	// 	$('.dt-checkboxes').click(function(){
	// 		if ($(".dt-checkboxes").is(':checked')) {
	// 			aa.show();
	// 		} else {
	// 			aa.hide();
	// 		}
	// 	});

	// });

	// function myFunction() {
	// 	var checkBox = document.getElementsByClassName("dt-checkboxes");
	// 	var text = document.getElementsByClassName("ss");

	// 	if (checkBox.checked == true) {
	// 		text.style.display = "block";
	// 	} else {
	// 		text.style.display = "none";
	// 	}
	// }

	$(document).ready(function() {
		var table = $('#example').DataTable( {
			"ajax": {
				"url": "{{asset('asset/js/dat.js')}}",
				"dataSrc": "data"
			},

			"columnDefs": [ {
				"targets": -1,
				"data": null,
				"defaultContent": "<button>Edit</button>"
			},
			{
				'targets': 0,
				'checkboxes': {
					'selectRow': true
				}
			} ],

			select: true,
			
			'order': [[1, 'asc']]
		} );

		$('#example tbody').on( 'click', 'button', function () {
			var data = table.row( $(this).parents('tr') ).data();
			window.location.href = "http://www.w3schools.com";
		} );

		$('#button').click( function () {
			var rows_selected = table.column(0).checkboxes.selected();
			$.each(rows_selected, function(index, rowId){
				table.row('.selected').remove().draw( false );
			});
			
		} );

		$('#status').click( function () {
			var data = table.row('.selected').data();
			var number = data[ 3 ];
			document.getElementById("datas").innerHTML = number;
		} );

		var countChecked = function () {
			var table = $('#example').DataTable();
			var n = table.row('.selected').count();
			if (n >= 1) {
				$("#button").css({
					"display": "block"
				});
			} else {
				$("#button").css({
					"display": "none"
				});
			}
		};
		countChecked();

		$("input[type=checkbox]").on("click", countChecked());

	} );
</script>
@endsection
