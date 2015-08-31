@extends('layout.master')

@section('content')
	<div class="row">
		{{-- Sidebar --}}
		<div class="col-sm-3">
			@include('layout.partials.sidebar')
		</div>

		{{-- Main Panel --}}
		<div class="col-sm-9">
			@yield('body')
		</div>

	</div>
@endsection