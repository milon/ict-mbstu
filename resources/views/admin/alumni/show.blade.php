@extends('layout.admin')

@section('body')
	<h1>
		Alumni Detail
		<div class="pull-right">
			<a href="{{ url('/admin/alumni') }}" class="btn btn-primary"><i class="fa fa-list"></i> Go Back</a>
			<a href="{{ url("/admin/alumni/{$alumni->id}/edit") }}" class="btn btn-info"><i class="fa fa-edit"></i> Edit</a>
		</div>
	</h1>
	<hr>

	@include('flash::message')

	<table class="table table-striped">
		<tr>
			<td>Name</td>
			<td>{{ $alumni->name }}</td>
		</tr>

		<tr>
			<td>Student ID</td>
			<td>{{ $alumni->student_id }}</td>
		</tr>

		<tr>
			<td>Degree</td>
			<td>{{ $alumni->degree }}</td>
		</tr>

		<tr>
			<td>Passing Year</td>
			<td>{{ $alumni->passing_year }}</td>
		</tr>

		<tr>
			<td>Email</td>
			<td>{{ $alumni->email }}</td>
		</tr>

		<tr>
			<td>Phone</td>
			<td>{{ $alumni->phone }}</td>
		</tr>

		<tr>
			<td>Website</td>
			<td>{{ $alumni->website }}</td>
		</tr>
	</table>

	<div>
		{!! html_entity_decode($alumni->description) !!}
	</div>
@endsection