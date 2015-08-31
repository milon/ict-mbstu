@extends('layout.admin')

@section('body')	
	<h1>Edit Alumni</h1>
	<hr>

	{!! Form::model($alumni, ['method' => 'put', 'url' => "admin/alumni/{$alumni->id}", 'class' => 'form-horizontal']) !!}
		
		@include('admin.alumni._form')

		<div class="form-group">
            <div class="col-sm-offset-3 col-sm-5">
                {!! Form::submit('Update Alumni', ['class' => 'btn btn-success']) !!}
                <a href="{{ url('/admin/alumni') }}" class="btn btn-warning btn-margin-left">Cancel</a>
            </div>
        </div>

	{!! Form::close() !!}
@endsection