{{-- Name Field --}}
<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
    {!! Form::label('name', 'Name', ['class' => 'col-sm-3 control-label']) !!}
    <div class="col-sm-8">
        {!! Form::text('name', null, ['class' => 'form-control']) !!}
        <span class="help-block text-danger">
            {{ $errors -> first('name') }}
        </span>
    </div>
</div>

{{-- Student ID --}}
<div class="form-group{{ $errors->has('student_id') ? ' has-error' : '' }}">
    {!! Form::label('student_id', 'Student ID', ['class' => 'col-sm-3 control-label']) !!}
    <div class="col-sm-8">
        {!! Form::text('student_id', null, ['class' => 'form-control']) !!}
        <span class="help-block text-danger">
            {{ $errors -> first('student_id') }}
        </span>
    </div>
</div>

{{-- Degree --}}
<div class="form-group{{ $errors->has('degree') ? ' has-error' : '' }}">
    {!! Form::label('degree', 'Degree', ['class' => 'col-sm-3 control-label']) !!}
    <div class="col-sm-8">
        {!! Form::select('degree', $degreeList, null, ['class' => 'form-control select2']) !!}
        <span class="help-block text-danger">
            {{ $errors -> first('degree') }}
        </span>
    </div>
</div>

{{-- Passing Year --}}
<div class="form-group{{ $errors->has('passing_year') ? ' has-error' : '' }}">
    {!! Form::label('passing_year', 'Passing Year', ['class' => 'col-sm-3 control-label']) !!}
    <div class="col-sm-8">
        {!! Form::text('passing_year', null, ['class' => 'form-control']) !!}
        <span class="help-block text-danger">
            {{ $errors -> first('passing_year') }}
        </span>
    </div>
</div>

{{-- Email Field --}}
<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
    {!! Form::label('email', 'Email Address', ['class' => 'col-sm-3 control-label']) !!}
    <div class="col-sm-8">
        {!! Form::text('email', null, ['class' => 'form-control']) !!}
        <span class="help-block text-danger">
            {{ $errors -> first('email') }}
        </span>
    </div>
</div>

{{-- Phone Number --}}
<div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
    {!! Form::label('phone', 'Phone Number', ['class' => 'col-sm-3 control-label']) !!}
    <div class="col-sm-8">
        {!! Form::text('phone', null, ['class' => 'form-control']) !!}
        <span class="help-block text-danger">
            {{ $errors -> first('phone') }}
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

{{-- Description --}}
<div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
    {!! Form::label('description', 'Description', ['class' => 'col-sm-3 control-label']) !!}
    <div class="col-sm-8">
        {!! Form::textarea('description', null, ['class' => 'html-editor']) !!}
        <span class="help-block text-danger">
            {{ $errors -> first('description') }}
        </span>
    </div>
</div>
