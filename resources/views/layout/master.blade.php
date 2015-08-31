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
	<link type="text/css" href="{{ url('/admin_panel/datatables/css/dataTables.bootstrap.min.css') }}" rel="stylesheet">
	<link type="text/css" href="{{ url('/admin_panel/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
	<link rel="stylesheet" href="{{ url('/admin_panel/bootstrap-summernote/summernote.css') }}">
	<link rel="stylesheet" href="{{ url('/admin_panel/bootstrap-datepicker/css/bootstrap-datepicker.min.css') }}">
    
    <link rel="stylesheet" href="{{ url('/admin_panel/css/style.css') }}">
</head>
<body>

	@include('layout.partials.navbar')

	<div class="container">
        @yield('content')
    </div>

	@include('layout.partials.footer')

	<script src="{{ url('/admin_panel/scripts/jquery-2.1.4.min.js') }}"></script>
	<script src="{{ url('/admin_panel/bootstrap/js/bootstrap.min.js') }}"></script>
	<script src="{{ url('/admin_panel/datatables/js/jquery.dataTables.js') }}"></script>
	<script src="{{ url('/admin_panel/datatables/js/dataTables.bootstrap.min.js') }}"></script>
	<script src="{{ url('/admin_panel/bootstrap-summernote/summernote.min.js') }}"></script>
	<script src="{{ url('/admin_panel/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>
	<script src="{{ url('/admin_panel/scripts/html-editor.js') }}"></script>
	<script src="{{ url('/admin_panel/scripts/delete-form.js') }}"></script>
	<script src="{{ url('/admin_panel/scripts/script.js') }}"></script>

	@yield('scripts')
</body>