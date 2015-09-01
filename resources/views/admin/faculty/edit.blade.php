@extends('layout.admin')

@section('body')	
	<h1>Edit Faculty</h1>
	<hr>

	{!! Form::model($faculty, ['method' => 'put', 'files' => true, 'url' => "admin/faculty/{$faculty->id}", 'class' => 'form-horizontal']) !!}
		
		@include('admin.faculty._form')

		<div class="form-group">
            <div class="col-sm-offset-3 col-sm-5">
                {!! Form::submit('Update Faculty', ['class' => 'btn btn-success']) !!}
                <a href="{{ url('/admin/faculty') }}" class="btn btn-warning btn-margin-left">Cancel</a>
            </div>
        </div>

	{!! Form::close() !!}
@endsection