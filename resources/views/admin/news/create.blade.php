@extends('layout.admin')

@section('body')	
	<h1>Create New News</h1>
	<hr>

	{!! Form::open(['url' => 'admin/news', 'class' => 'form-horizontal']) !!}
		
		@include('admin.news._form')

		<div class="form-group">
            <div class="col-sm-offset-3 col-sm-5">
                {!! Form::submit('Save News', ['class' => 'btn btn-success']) !!}
                <a href="{{ url('/admin/news') }}" class="btn btn-warning btn-margin-left">Cancel</a>
            </div>
        </div>

	{!! Form::close() !!}
@endsection