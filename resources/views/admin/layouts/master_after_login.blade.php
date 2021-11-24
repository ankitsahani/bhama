<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="base_url" content="{{ url('/') }}">
    <title>Bhama Ecommerce</title>
    <link rel="stylesheet" href="{{asset('assets/vendors/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendors/css/vendor.bundle.base.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/datatables.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/datetimepicker.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/toastr.min.css')}}">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="shortcut icon" href="" />
		<style>
		/*.dataTables_scrollHeadInner, .table{ width:100%!important; }*/
		body.sidebar-icon-only #mytable_wrapper table,
		body.sidebar-icon-only  #mytable_wrapper .dataTables_scrollHeadInner {
			/* width: 100% !important; */
		}
		</style>
    @toastr_css
  </head>
  <body>
<div class="container-scroller">


			<!-- navbar -->
			@include('admin.includes.navbar')
			<div class="container-fluid page-body-wrapper">
				<!-- sidebar -->
				@include('admin.includes.sidebar')
				<div class="main-panel">

		    		@yield('content')
		    		@include('admin.includes.copyright')
		    	</div>
	    	</div>
	    </div>


    <!-- Modal -->
<div class="modal fade" id="logout" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-md modal-center" role="document">
    <div class="modal-content">
      <div class="modal-body text-center my-4 py-4">
				<h4 class="text-dark">Are you sure<br> you want to logout ?</h4>
        <div class="col-sm-12 mx-auto d-flex align-items-center mt-4 row">
					<div class="col-6 px-2">
						<button type="button" class="btn btn-primary btn-lg btn-block font-16" data-dismiss="modal">No</button>	
					</div>
        
					<div class="col-6 px-2">
						<a href="{{route('logout')}}" type="button" class="btn btn-primary btn-lg btn-block font-16">Yes</a>
					</div>
         
				</div>
      </div>
    </div>
  </div>
</div>

<script src="{{asset('assets/vendors/js/vendor.bundle.base.js')}}"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="{{asset('/assets/js/datepicker.js')}}"></script>
<script src="{{asset('assets/js/moment.js')}}"></script>
<script src="{{asset('assets/js/datetimepicker.min.js')}}"></script>
<script src="{{asset('assets/js/datatables.min.js')}}"></script>
<script src="{{asset('assets/js/validate.min.js')}}"></script>
<script src="{{asset('assets/js/toastr.min.js')}}"></script>

<script src="{{asset('assets/js/ckeditor.js')}}"></script>
<script src="{{asset('assets/js/custom.js')}}"></script>
<script src="{{asset('assets/js/common.js')}}"></script>
<script src="{{asset('assets/js/formvalidation.js')}}"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
</body>
<script>
$(document).ready(function() {
	var table1 = $('#userTable').DataTable( {
		"scrollX": true,
		dom: 'Bfrtip',
			buttons: [
				'copy', 'csv', 'excel', 'pdf', 'print'
			]
	});
	mytable();
	function mytable(){
		oTable = $('#mytable').DataTable({
			"scrollX": true,
			"responsive": false,
			"bAutoWidth": false
		});   //pay attention to capital D, which is mandatory to retrieve "api" datatables' object, as @Lionel said
		$('#search_text').keyup(function(){
			oTable.search($(this).val()).draw() ;
		})
	}
	$('.navbar-toggler').click(function(){
		$('#mytable').dataTable().fnDestroy();
		setTimeout(function() {
			$($.fn.dataTable.tables(true)).DataTable().columns.adjust();
			mytable();
		}, 200);
	})
	$('#Meal').DataTable();
});
mealTable = $('#Meal').DataTable();   
$('#searchMeal').keyup(function(){
      mealTable.search($(this).val()).draw() ;
});
$(document).ready(function() {
    $('#Volume').DataTable();
} );
volumeTable = $('#Volume').DataTable();   
$('#searchVolume').keyup(function(){
      volumeTable.search($(this).val()).draw() ;
});

</script>

    @toastr_js
    @toastr_render


</html>