@extends('layout.admin')

@section('body')	
	<h1>Create New Education</h1>
	<hr>

	{!! Form::open(['url' => "admin/faculty/$facultyId/education/create", 'files' => true, 'class' => 'form-horizontal']) !!}
		
		@include('admin.faculty.education._form')

		<div class="form-group">
            <div class="col-sm-offset-3 col-sm-5">
                {!! Form::submit('Save Education', ['class' => 'btn btn-success']) !!}
                <a href="{{ url("/admin/faculty/$facultyId") }}" class="btn btn-warning btn-margin-left">Cancel</a>
            </div>
        </div>

	{!! Form::close() !!}
@endsection
