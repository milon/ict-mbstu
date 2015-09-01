@extends('layout.admin')

@section('body')	
	<h1>Create New Research Group</h1>
	<hr>

	{!! Form::open(['url' => 'admin/research_group', 'files' => true, 'class' => 'form-horizontal']) !!}
		
		@include('admin.research_group._form')

		<div class="form-group">
            <div class="col-sm-offset-3 col-sm-5">
                {!! Form::submit('Save Research Group', ['class' => 'btn btn-success']) !!}
                <a href="{{ url('/admin/research_group') }}" class="btn btn-warning btn-margin-left">Cancel</a>
            </div>
        </div>

	{!! Form::close() !!}
@endsection