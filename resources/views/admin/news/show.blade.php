@extends('layout.admin')

@section('body')
	<h1>
		News Detail
		<div class="pull-right">
			<a href="{{ url('/admin/news') }}" class="btn btn-primary"><i class="fa fa-list"></i> Go Back</a>
			<a href="{{ url("/admin/news/{$news->id}/edit") }}" class="btn btn-info"><i class="fa fa-edit"></i> Edit</a>
		</div>
	</h1>
	<hr>

	@include('flash::message')

	<h2>{{ $news->title }}</h2>
	<h4>{{ $news->published_at->toDateString() }}</h4>

	<div>
		{!! html_entity_decode($news->description) !!}
	</div>
@endsection