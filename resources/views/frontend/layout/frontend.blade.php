<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Nuruzzaman Milon">
    <title>@yield('title', 'ICT-MBSTU')</title>

    <!-- core CSS -->
    <link href="{{ asset('/front_panel/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/front_panel/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/front_panel/css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/front_panel/css/prettyPhoto.css') }}" rel="stylesheet">
    <link href="{{ asset('/front_panel/css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('/front_panel/css/responsive.css') }}" rel="stylesheet">

    @yield('style')

    <link href="{{ asset('/front_panel/css/style.css') }}" rel="stylesheet">

    <!--[if lt IE 9]>
    <script src="{{ asset('/front_panel/js/html5shiv.js') }}"></script>
    <script src="{{ asset('js/respond.min.js') }}"></script>
    <![endif]-->

</head><!--/head-->

<body class="homepage">

{{--header--}}
@include('frontend.layout.partials._header')

@yield('content')

@include('frontend.layout.partials._footer')

<script src="{{ asset('/front_panel/js/jquery.js') }}"></script>
<script src="{{ asset('/front_panel/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('/front_panel/js/jquery.prettyPhoto.js') }}"></script>
<script src="{{ asset('/front_panel/js/jquery.isotope.min.js') }}"></script>
<script src="{{ asset('/front_panel/js/main.js') }}"></script>
<script src="{{ asset('/front_panel/js/wow.min.js') }}"></script>

@yield('script')

</body>
</html>
