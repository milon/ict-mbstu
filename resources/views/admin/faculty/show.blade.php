@extends('layout.admin')

@section('body')
	<h1>
		Faculty Detail
		<div class="pull-right">
			<a href="{{ url('/admin/faculty') }}" class="btn btn-primary"><i class="fa fa-list"></i> Go Back</a>
			<a href="{{ url("/admin/faculty/{$faculty->id}/edit") }}" class="btn btn-info"><i class="fa fa-edit"></i> Edit</a>
		</div>
	</h1>
	<hr>

	<div class="row">
		<div class="col-sm-3">
			<img src="{{ $faculty->avatar }}" alt="Avatar" class="img-thumbnail">
		</div>

		<div class="col-sm-9">
			<h2>{{ $faculty->name }}</h2>
			<h4>{{ $faculty->designation }}</h4>
			<p><i class="fa fa-envelope-o"></i> Email: {{ $faculty->email }}</p>
			<p><i class="fa fa-phone"></i> Phone: {{ $faculty->phone }}</p>
			<p><i class="fa fa-globe"></i> Website: {{ $faculty->website }}</p>
			<p><i class="fa fa-map-marker"></i> Address: {{ $faculty->address }}</p>
		</div>
	</div>

	<div class="row bio-margin-top">
		<div class="col-sm-12">
			{!! html_entity_decode($faculty->bio) !!}
		</div>
	</div>
@endsection