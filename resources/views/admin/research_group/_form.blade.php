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

{{-- Co-ordinator --}}
<div class="form-group{{ $errors->has('co_ordinator') ? ' has-error' : '' }}">
    {!! Form::label('co_ordinator', 'Co-Ordinator', ['class' => 'col-sm-3 control-label']) !!}
    <div class="col-sm-8">
        {!! Form::select('co_ordinator', $facultyList, null, ['class' => 'form-control select2']) !!}
        <span class="help-block text-danger">
            {{ $errors -> first('co_ordinator') }}
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