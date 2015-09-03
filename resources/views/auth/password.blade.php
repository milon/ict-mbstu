@extends('layout.master')

@section('content')
	<div class="row">
		<div class="col-sm-12">
			<h1>Remember Password</h1>
			<hr>

			{!! Form::open(['url' => '/password/email', 'class' => 'form-horizontal']) !!}				
				{{-- email --}}
				<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
				    {!! Form::label('email', 'Email Address', ['class' => 'col-sm-3 control-label']) !!}
				    <div class="col-sm-6">
				        {!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Email Address']) !!}
				        <span class="help-block text-danger">
				            {{ $errors->first('email') }}
				        </span>
				    </div>
				</div>

				<!-- Log In! Field -->
		        <div class="form-group">
		            <div class="col-sm-offset-3 col-sm-5">
		                {!! Form::submit('Remember Password', ['class' => 'btn btn-primary']) !!}
		            </div>
		        </div>

			{!! Form::close() !!}
		</div>
	</div>
@endsection