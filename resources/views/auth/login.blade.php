@extends('layout.login')

@section('content')
	<div class="row">
		<div class="module module-login span4 offset4">

			{!! Form::open(['url' => 'auth/login', 'class' => 'form-vertical']) !!}
				<div class="module-head">
					<h3>Sign In</h3>
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
				</div>
				<div class="module-foot">
					<div class="control-group">
						<div class="controls clearfix">
							<button type="submit" class="btn btn-primary pull-right">Login</button>
							<label class="checkbox">
								<input type="checkbox" name="remember"> Remember me
							</label>
						</div>
					</div>
				</div>
			{!! Form::close() !!}
		</div>
	</div>
@endsection