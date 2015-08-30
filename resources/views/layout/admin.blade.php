<!DOCTYPE html>
<html lang="en">

<head>
<head>
	<link href="{{ url('/admin_panel/images/mbstu.ico') }}" rel="shortcut icon" type="image/x-icon" />
	<link href="{{ url('/admin_panel/images/mbstu.ico') }}" rel="icon" type="image/x-icon" />

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>ICT-MBSTU</title>
	<link type="text/css" href="{{ url('/admin_panel/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
	<link type="text/css" href="{{ url('/admin_panel/bootstrap/css/bootstrap-responsive.min.css') }}" rel="stylesheet">
	<link type="text/css" href="{{ url('/admin_panel/css/theme.css') }}" rel="stylesheet">
	<link type="text/css" href="{{ url('/admin_panel/images/icons/css/font-awesome.css') }}" rel="stylesheet">
	<link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>

    <link rel="stylesheet" href="{{ url('/admin_panel/css/style.css') }}">
</head>
<body>

	@include('layout.partials.navbar')



	<div class="wrapper">
		<div class="container">
			<div class="row">

				@include('layout.partials.sidebar')


				<div class="span9">
					<div class="content">

						@yield('content')
						
					</div><!--/.content-->
				</div><!--/.span9-->
			</div>
		</div><!--/.container-->
	</div><!--/.wrapper-->

	<div class="footer">
		<div class="container">
			 

			<b class="copyright">&copy; 2014 Edmin - EGrappler.com </b> All rights reserved.
		</div>
	</div>

	<script src="{{ url('/admin_panel/scripts/jquery-1.9.1.min.js') }}"></script>
	<script src="{{ url('/admin_panel/scripts/jquery-ui-1.10.1.custom.min.js') }}"></script>
	<script src="{{ url('/admin_panel/bootstrap/js/bootstrap.min.js') }}"></script>
	<script src="{{ url('/admin_panel/scripts/flot/jquery.flot.js') }}"></script>
	<script src="{{ url('/admin_panel/scripts/datatables/jquery.dataTables.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('.datatable-1').dataTable();
            $('.dataTables_paginate').addClass("btn-group datatable-pagination");
            $('.dataTables_paginate > a').wrapInner('<span />');
            $('.dataTables_paginate > a:first-child').append('<i class="icon-chevron-left shaded"></i>');
            $('.dataTables_paginate > a:last-child').append('<i class="icon-chevron-right shaded"></i>');
        } );
    </script>

	@yield('scripts')
</body>