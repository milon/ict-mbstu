@extends('layout.admin')

@section('body')	
	<h1>Create New Alumni</h1>
	<hr>

	{!! Form::open(['url' => 'admin/alumni', 'class' => 'form-horizontal']) !!}
		
		@include('admin.alumni._form')

		<div class="form-group">
            <div class="col-sm-offset-3 col-sm-5">
                {!! Form::submit('Save Alumni', ['class' => 'btn btn-success']) !!}
                <a href="{{ url('/admin/alumni') }}" class="btn btn-warning btn-margin-left">Cancel</a>
            </div>
        </div>

	{!! Form::close() !!}
@endsection