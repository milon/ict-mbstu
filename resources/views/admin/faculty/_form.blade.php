{{-- Name --}}
<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
    {!! Form::label('name', 'Name', ['class' => 'col-sm-3 control-label']) !!}
    <div class="col-sm-8">
        {!! Form::text('name', null, ['class' => 'form-control']) !!}
        <span class="help-block text-danger">
            {{ $errors -> first('name') }}
        </span>
    </div>
</div>

{{-- Designation --}}
<div class="form-group{{ $errors->has('designation') ? ' has-error' : '' }}">
    {!! Form::label('designation', 'Designation', ['class' => 'col-sm-3 control-label']) !!}
    <div class="col-sm-8">
        {!! Form::text('designation', null, ['class' => 'form-control']) !!}
        <span class="help-block text-danger">
            {{ $errors->first('designation') }}
        </span>
    </div>
</div>

{{-- Email --}}
<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
    {!! Form::label('email', 'Email Address', ['class' => 'col-sm-3 control-label']) !!}
    <div class="col-sm-8">
        {!! Form::text('email', null, ['class' => 'form-control']) !!}
        <span class="help-block text-danger">
            {{ $errors->first('email') }}
        </span>
    </div>
</div>

{{-- Phone --}}
<div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
    {!! Form::label('phone', 'Phone Number', ['class' => 'col-sm-3 control-label']) !!}
    <div class="col-sm-8">
        {!! Form::text('phone', null, ['class' => 'form-control']) !!}
        <span class="help-block text-danger">
            {{ $errors->first('phone') }}
        </span>
    </div>
</div>

{{-- Website --}}
<div class="form-group{{ $errors->has('website') ? ' has-error' : '' }}">
    {!! Form::label('website', 'Website', ['class' => 'col-sm-3 control-label']) !!}
    <div class="col-sm-8">
        {!! Form::text('website', null, ['class' => 'form-control']) !!}
        <span class="help-block text-danger">
            {{ $errors -> first('website') }}
        </span>
    </div>
</div>

{{-- Address --}}
<div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
    {!! Form::label('address', 'Address', ['class' => 'col-sm-3 control-label']) !!}
    <div class="col-sm-8">
        {!! Form::textarea('address', null, ['rows' => 4, 'class' => 'form-control']) !!}
        <span class="help-block text-danger">
            {{ $errors -> first('address') }}
        </span>
    </div>
</div>

{{-- Password --}}
<div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
    {!! Form::label('password', 'Password', ['class' => 'col-sm-3 control-label']) !!}
    <div class="col-sm-8">
        {!! Form::password('password', ['class' => 'form-control']) !!}
        <span class="help-block text-danger">
            {{ $errors->first('password') }}
        </span>
    </div>
</div>

{{-- Password Confirmation --}}
<div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
    {!! Form::label('password_confirmation', 'Password Confirmation', ['class' => 'col-sm-3 control-label']) !!}
    <div class="col-sm-8">
        {!! Form::password('password_confirmation', ['class' => 'form-control']) !!}
    </div>
</div>

{{-- leave --}}
<div class="form-group{{ $errors->has('leave') ? ' has-error' : '' }}">
    {!! Form::label('leave', 'Education Leave', ['class' => 'col-sm-3 control-label']) !!}
    <div class="col-sm-8">
        <input type="checkbox" name="education_leave" class="switch" data-handle-width="45" data-on-text="Yes" data-off-text="No" {{ (isset($faculty) && $faculty->education_leave)?'checked':'' }}>
        <span class="help-block text-danger">
            {{ $errors->first('leave') }}
        </span>
    </div>
</div>

{{-- Avatar --}}
<div class="form-group{{ $errors->has('avatar') ? ' has-error' : '' }}">
    {!! Form::label('avatar', 'Profile Picture', ['class' => 'col-sm-3 control-label']) !!}
    <div class="col-sm-8">
        <div class="fileinput fileinput-new input-group" data-provides="fileinput">
		  	<div class="form-control" data-trigger="fileinput">
			  	<i class="glyphicon glyphicon-file fileinput-exists"></i>
			  	<span class="fileinput-filename"></span>
		  	</div>
	  		<span class="input-group-addon btn btn-default btn-file">
		  		<span class="fileinput-new">Select file</span>
		  		<span class="fileinput-exists">Change</span>
		  		{!! Form::file('avatar') !!}
	  		</span>
	  		<a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
		</div>
		<span class="help-block text-danger">
            {{ $errors -> first('avatar') }}
        </span>
    </div>
</div>

{{-- Biography --}}
<div class="form-group{{ $errors->has('bio') ? ' has-error' : '' }}">
    {!! Form::label('bio', 'Biography', ['class' => 'col-sm-3 control-label']) !!}
    <div class="col-sm-8">
        {!! Form::textarea('bio', null, ['class' => 'html-editor']) !!}
        <span class="help-block text-danger">
            {{ $errors -> first('bio') }}
        </span>
    </div>
</div>
