@extends('layout.admin')

@section('body')	
	<h1>Edit News</h1>
	<hr>

	{!! Form::model($researchArea, ['method' => 'put', 'url' => "admin/research_area/{$researchArea->id}", 'class' => 'form-horizontal']) !!}
		
		@include('admin.research_area._form')

		<div class="form-group">
            <div class="col-sm-offset-3 col-sm-5">
                {!! Form::submit('Update Research Area', ['class' => 'btn btn-success']) !!}
                <a href="{{ url('/admin/research_area') }}" class="btn btn-warning btn-margin-left">Cancel</a>
            </div>
        </div>

	{!! Form::close() !!}
@endsection