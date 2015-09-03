@extends('layout.admin')

@section('body')
	<h1>User Profile</h1>
	<hr>

	@include('flash::message')

	{!! Form::open(['url' => '/admin/profile', 'class' => 'form-horizontal']) !!}
		
		{{-- name --}}
		<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
		    {!! Form::label('name', 'Name', ['class' => 'col-sm-3 control-label']) !!}
		    <div class="col-sm-8">
		        {!! Form::text('name', $user->name, ['class' => 'form-control', 'placeholder' => 'Name']) !!}
		        <span class="help-block text-danger">
		            {{ $errors->first('name') }}
		        </span>
		    </div>
		</div>

		{{-- email --}}
		<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
		    {!! Form::label('email', 'Email Address', ['class' => 'col-sm-3 control-label']) !!}
		    <div class="col-sm-8">
		        {!! Form::text('email', $user->email, ['class' => 'form-control', 'placeholder' => 'Email Address']) !!}
		        <span class="help-block text-danger">
		            {{ $errors->first('email') }}
		        </span>
		    </div>
		</div>

		{{-- password --}}
		<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
		    {!! Form::label('password', 'Password', ['class' => 'col-sm-3 control-label']) !!}
		    <div class="col-sm-8">
		        {!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'Password']) !!}
		        <span class="help-block text-danger">
		            {{ $errors->first('password') }}
		        </span>
		    </div>
		</div>

		{{-- password_confirmation --}}
		<div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
		    {!! Form::label('password_confirmation', 'Confirm Password', ['class' => 'col-sm-3 control-label']) !!}
		    <div class="col-sm-8">
		        {!! Form::password('password_confirmation', ['class' => 'form-control', 'placeholder' => 'Confirm Password']) !!}
		        <span class="help-block text-danger">
		            {{ $errors->first('password_confirmation') }}
		        </span>
		    </div>
		</div>

		<!-- Log In! Field -->
        <div class="form-group">
            <div class="col-sm-offset-3 col-sm-5">
                {!! Form::submit('Update Profile', ['class' => 'btn btn-primary']) !!}
            </div>
        </div>

	{!! Form::close() !!}
@endsection