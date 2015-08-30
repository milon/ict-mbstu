@extends('layout.login')

@section('content')
	
	<div class="row">
		<div class="module module-login span4 offset4">

			{!! Form::open(['url' => '/password/reset', 'class' => 'form-vertical']) !!}
				<input type="hidden" name="token" value="{{ $token }}">
				
				<div class="module-head">
					<h3>Reset Password</h3>
				</div>
				
				@if($errors->has())
				    <div class="alert alert-danger alert-dismissable">
				        <button type="button" class="close" aria-label="Close" data-dismiss="alert">
				            <span aria-hidden="true">&times;</span>
				        </button>
				        <ul>
				            @foreach($errors->all() as $error)
				                <li> {{$error}} </li>
				            @endforeach
				        </ul>
				    </div>
				@endif

				<div class="module-body">
					<div class="control-group">
						<div class="controls row-fluid">
							<input class="span12" type="text" name="email" id="inputEmail" value="{{ old('email') }}" placeholder="Email Address">
						</div>
					</div>
					<div class="control-group">
						<div class="controls row-fluid">
							<input class="span12" type="password" name="password" id="inputPassword" placeholder="Password">
						</div>
					</div>
					<div class="control-group">
						<div class="controls row-fluid">
							<input class="span12" type="password" name="password_confirmation" id="inputPassword" placeholder="Confirm Password">
						</div>
					</div>
				</div>
				<div class="module-foot">
					<div class="control-group">
						<div class="controls clearfix">
							<button type="submit" class="btn btn-primary pull-right">Reset Password</button>
						</div>
					</div>
				</div>
			{!! Form::close() !!}
		</div>
	</div>

@endsection