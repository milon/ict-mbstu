<!DOCTYPE html>
<html lang="en">

<head>
<head>
	<link href="{{ url('/images/mbstu.ico') }}" rel="shortcut icon" type="image/x-icon" />
	<link href="{{ url('/images/mbstu.ico') }}" rel="icon" type="image/x-icon" />

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>ICT-MBSTU</title>
	<link type="text/css" href="{{ url('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
	<link type="text/css" href="{{ url('bootstrap/css/bootstrap-responsive.min.css') }}" rel="stylesheet">
	<link type="text/css" href="{{ url('css/theme.css') }}" rel="stylesheet">
	<link type="text/css" href="{{ url('images/icons/css/font-awesome.css') }}" rel="stylesheet">
	<link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>
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

	<script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
	<script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
	<script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="scripts/flot/jquery.flot.js" type="text/javascript"></script>
	<script src="scripts/datatables/jquery.dataTables.js" type="text/javascript"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$('.table-message tbody tr').click(
				function() 
				{
					$(this).toggleClass('resolved');
				}
			);
		} );
	</script>
</body>