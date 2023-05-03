
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <meta name="description" content="Smarthr - Bootstrap Admin Template">
		<meta name="keywords" content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern, accounts, invoice, html5, responsive, CRM, Projects">
        <meta name="author" content="Dreamguys - Bootstrap Admin Template">
        <meta name="robots" content="noindex, nofollow">
		<meta name="csrf-token" content="content">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		{{-- <meta name="csrf-token" content="{{ csrf_token() }}"> --}}
        <title>Tanvir ShibliHRMS admin template</title>
		

		<!-- Bootstrap 5 -->
		<link
		href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css"
		rel="stylesheet"
	  />
  
	  <!-- Bootstrap icons -->
	  <link
		rel="stylesheet"
		href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css"
	  />
		<!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
		
		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href={{ URL::to('/assets/css/bootstrap.min.css') }}>
		
		<!-- Fontawesome CSS -->
        <link rel="stylesheet" href={{ URL::to('/assets/css/font-awesome.min.css') }}>
		
		<!-- Lineawesome CSS -->
        <link rel="stylesheet" href={{ URL::to('/assets/css/line-awesome.min.css') }}>
		
		<!-- Select2 CSS -->
		<link rel="stylesheet" href={{ URL::to('/assets/css/select2.min.css') }}>
		
		<!-- Datetimepicker CSS -->
		<link rel="stylesheet" href={{ URL::to('/assets/css/bootstrap-datetimepicker.min.css') }}>
		
		<!-- Main CSS -->
        <link rel="stylesheet" href={{ URL::to('/assets/css/style.css') }}>
		
		<!-- Datatable CSS -->
		<link rel="stylesheet" href={{ URL::to('/assets/css/dataTables.bootstrap4.min.css') }}>

		 <!-- DataTables --> 

		 <link rel="stylesheet" href={{ URL::to('/assets/tplugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}>
		 <link rel="stylesheet" href={{ URL::to('/assets/tplugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}>
		 <link rel="stylesheet" href={{ URL::to('/assets/tplugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}>
		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
			<script src="assets/js/html5shiv.min.js"></script>
			<script src="assets/js/respond.min.js"></script>
		<![endif]-->

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/jszip-2.5.0/dt-1.11.5/af-2.3.7/b-2.2.2/b-html5-2.2.2/b-print-2.2.2/date-1.1.2/r-2.2.9/datatables.min.css"/>
 
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
		<script type="text/javascript" src="https://cdn.datatables.net/v/dt/jszip-2.5.0/dt-1.11.5/af-2.3.7/b-2.2.2/b-html5-2.2.2/b-print-2.2.2/date-1.1.2/r-2.2.9/datatables.min.js"></script>
		
	</head>
    <body>
		<!-- Main Wrapper -->
        <div class="main-wrapper">
		
			<!-- Header -->
                 @include("layout.erp.navbar")
			<!-- /Header -->
			
			<!-- Sidebar -->
        		@include("layout.erp.mainsidebar")
			<!-- /Sidebar -->
			
			<!-- Page Wrapper -->
            <div class="page-wrapper">
				<style>
					label{
						color: aliceblue;
						font-size: 20px;
						font-weight: bold;
					}
				</style>
				<!-- Page Content -->
                @yield('page')  
				<!-- /Delete Employee Modal -->
				
            </div>
			<!-- /Page Wrapper -->
			
        </div>
		<!-- /Main Wrapper -->
		<!-- jQuery -->
        <script src={{ URL::to('/assets/js/jquery-3.5.1.min.js') }}></script>
		
		<!-- Bootstrap Core JS -->
        <script src={{ URL::to('/assets/js/popper.min.js') }}></script>
        <script src={{ URL::to('/assets/js/bootstrap.min.js') }}></script>
		
		<!-- Slimscroll JS -->
		<script src={{ URL::to('/assets/js/slimscroll.min.js') }}></script>
		
		<!-- Select2 JS -->
		<script src={{ URL::to('/assets/js/select2.min.js') }}></script>
		
		<!-- Datetimepicker JS -->
		<script src={{ URL::to('/assets/js/moment.min.js') }}></script>
		<script src={{ URL::to('/assets/js/bootstrap-datetimepicker.min.js') }}></script>
		
		<!-- Custom JS -->
		<script src={{ URL::to('/assets/js/app.js') }}></script>
		<!-- DataTables  & Plugins -->
			<script src={{ URL::to('/assets/tplugins/datatables/jquery.dataTables.min.js') }}></script>
			<script src={{ URL::to('/assets/tplugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}></script>
			<script src={{ URL::to('/assets/tplugins/datatables-responsive/js/dataTables.responsive.min.js') }}></script>
			<script src={{ URL::to('/assets/tplugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}></script>
			<script src={{ URL::to('/assets/tplugins/datatables-buttons/js/dataTables.buttons.min.js') }}></script>
			<script src={{ URL::to('/assets/tplugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}></script>
			<script src={{ URL::to('/assets/tplugins/jszip/jszip.min.js') }}></script>
			<script src={{ URL::to('/assets/tplugins/pdfmake/pdfmake.min.js') }}></script>
			<script src={{ URL::to('/assets/tplugins/pdfmake/vfs_fonts.js') }}></script>
			<script src={{ URL::to('/assets/tplugins/datatables-buttons/js/buttons.html5.min.js') }}></script>
			<script src={{ URL::to('/assets/tplugins/datatables-buttons/js/buttons.print.min.js') }}></script>
			<script src={{ URL::to('/assets/tplugins/datatables-buttons/js/buttons.colVis.min.js') }}></script>


		<!-- Datatable JS -->
		{{-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
		<script type="text/javascript" src="https://cdn.datatables.net/v/dt/jszip-2.5.0/dt-1.11.5/af-2.3.7/b-2.2.2/b-html5-2.2.2/b-print-2.2.2/date-1.1.2/r-2.2.9/datatables.min.js"></script> --}}
		{{-- <script src={{ URL::to('/assets/js/jquery.dataTables.min.js') }}></script> --}}
		{{-- <script src={{URL::to('/assets/js/dataTables.bootstrap4.min.js') }}></script> --}}
		
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jQuery-slimScroll/1.3.8/jquery.slimscroll.min.js" integrity="sha512-cJMgI2OtiquRH4L9u+WQW+mz828vmdp9ljOcm/vKTQ7+ydQUktrPVewlykMgozPP+NUBbHdeifE6iJ6UVjNw5Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
		@yield('scripts')
		<script>

			$(function () {
			  $("#example1").DataTable({
				"responsive": true, "lengthChange": false, "autoWidth": false,
				"buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
			  }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
			  $('#example2').DataTable({
				"paging": true,
				"lengthChange": false,
				"searching": false,
				"ordering": true,
				"info": true,
				"autoWidth": false,
				"responsive": true,
			  });
			});
		  </script>
		
    </body>
</html>