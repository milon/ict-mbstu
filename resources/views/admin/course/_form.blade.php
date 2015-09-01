{{-- Code --}}
<div class="form-group{{ $errors->has('code') ? ' has-error' : '' }}">
    {!! Form::label('code', 'Course Code', ['class' => 'col-sm-3 control-label']) !!}
    <div class="col-sm-8">
        {!! Form::text('code', null, ['class' => 'form-control']) !!}
        <span class="help-block text-danger">
            {{ $errors -> first('code') }}
        </span>
    </div>
</div>

{{-- name --}}
<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
    {!! Form::label('name', 'Course Title', ['class' => 'col-sm-3 control-label']) !!}
    <div class="col-sm-8">
        {!! Form::text('name', null, ['class' => 'form-control']) !!}
        <span class="help-block text-danger">
            {{ $errors -> first('name') }}
        </span>
    </div>
</div>

{{-- Semester --}}
<div class="form-group{{ $errors->has('semester') ? ' has-error' : '' }}">
    {!! Form::label('semester', 'Semester', ['class' => 'col-sm-3 control-label']) !!}
    <div class="col-sm-8">
        {!! Form::select('semester', $semesterList, null, ['class' => 'form-control select2']) !!}
        <span class="help-block text-danger">
            {{ $errors -> first('semester') }}
        </span>
    </div>
</div>

{{-- Credit --}}
<div class="form-group{{ $errors->has('credit') ? ' has-error' : '' }}">
    {!! Form::label('credit', 'Credit Hour', ['class' => 'col-sm-3 control-label']) !!}
    <div class="col-sm-8">
        {!! Form::text('credit', null, ['class' => 'form-control']) !!}
        <span class="help-block text-danger">
            {{ $errors -> first('credit') }}
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