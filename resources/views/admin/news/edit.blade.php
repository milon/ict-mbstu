@extends('layout.admin')

@section('body')	
	<h1>Edit News</h1>
	<hr>

	{!! Form::model($news, ['method' => 'put', 'url' => "admin/news/{$news->id}", 'class' => 'form-horizontal']) !!}
		
		@include('admin.news._form')

		<div class="form-group">
            <div class="col-sm-offset-3 col-sm-5">
                {!! Form::submit('Update News', ['class' => 'btn btn-success']) !!}
                <a href="{{ url('/admin/news') }}" class="btn btn-warning btn-margin-left">Cancel</a>
            </div>
        </div>

	{!! Form::close() !!}
@endsection