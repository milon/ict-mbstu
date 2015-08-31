@extends('layout.admin')

@section('body')	
	<h1>Create New Research Area</h1>
	<hr>

	{!! Form::open(['url' => 'admin/research_area', 'class' => 'form-horizontal']) !!}
		
		@include('admin.research_area._form')

		<div class="form-group">
            <div class="col-sm-offset-3 col-sm-5">
                {!! Form::submit('Save Research Area', ['class' => 'btn btn-success']) !!}
                <a href="{{ url('/admin/research_area') }}" class="btn btn-warning btn-margin-left">Cancel</a>
            </div>
        </div>

	{!! Form::close() !!}
@endsection