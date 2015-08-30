@extends('layout.login')

@section('content')
	<div class="row">
		<div class="module module-login span4 offset4">
			{!! Form::open(['url' => '/password/email', 'class' => 'form-vertical']) !!}

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

				<div class="module-head">
					<h3>Remember Password</h3>
				</div>
				<div class="module-body">
					<div class="control-group">
						<div class="controls row-fluid">
							<input class="span12" type="text" name="email" id="inputEmail" placeholder="Email Address">
						</div>
					</div>
				</div>
				<div class="module-foot">
					<div class="control-group">
						<div class="controls clearfix">
							<a href="{{ url('/auth/login') }}" class="btn btn-inverse">Cancel</a>
							<button type="submit" class="btn btn-primary pull-right">Remember Password</button>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
@endsection