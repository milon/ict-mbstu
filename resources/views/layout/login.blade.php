<!DOCTYPE html>
<html lang="en">
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
</head>
<body>

	<div class="navbar navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
					<i class="icon-reorder shaded"></i>
				</a>

			  	<a class="brand" href="#">
			  		ICT MBSTU
			  	</a>

				<div class="nav-collapse collapse navbar-inverse-collapse">
				
					<ul class="nav pull-right">
						<li><a href="{{ url('/password/email') }}">
							Forgot your password?
						</a></li>
					</ul>
				</div><!-- /.nav-collapse -->

			</div>
		</div><!-- /navbar-inner -->

	</div><!-- /navbar -->

	<div class="wrapper">
		<div class="container">
			@yield('content')
		</div>
	</div><!--/.wrapper-->

	<div class="footer">
		<div class="container">
			 

			<b class="copyright">&copy; {{ date('Y') }}, Dept. of ICT</b> All rights reserved.
		</div>
	</div>
	<script src="{{ url('/admin_panel/scripts/jquery-1.9.1.min.js') }}"></script>
	<script src="{{ url('/admin_panel/scripts/jquery-ui-1.10.1.custom.min.js') }}"></script>
	<script src="{{ url('/admin_panel/bootstrap/js/bootstrap.min.js') }}"></script>
</body>