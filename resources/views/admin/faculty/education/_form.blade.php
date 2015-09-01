{{-- name_of_degree --}}
<div class="form-group{{ $errors->has('name_of_degree') ? ' has-error' : '' }}">
    {!! Form::label('name_of_degree', 'Name of Degree', ['class' => 'col-sm-3 control-label']) !!}
    <div class="col-sm-8">
        {!! Form::text('name_of_degree', null, ['class' => 'form-control', 'placeholder' => 'Name of Degree']) !!}
        <span class="help-block text-danger">
            {{ $errors->first('name_of_degree') }}
        </span>
    </div>
</div>

{{-- institute --}}
<div class="form-group{{ $errors->has('institute') ? ' has-error' : '' }}">
    {!! Form::label('institute', 'Institute Name', ['class' => 'col-sm-3 control-label']) !!}
    <div class="col-sm-8">
        {!! Form::text('institute', null, ['class' => 'form-control', 'placeholder' => 'Institute Name']) !!}
        <span class="help-block text-danger">
            {{ $errors->first('institute') }}
        </span>
    </div>
</div>

{{-- year --}}
<div class="form-group{{ $errors->has('year') ? ' has-error' : '' }}">
    {!! Form::label('year', 'Passing Year', ['class' => 'col-sm-3 control-label']) !!}
    <div class="col-sm-8">
        {!! Form::text('year', null, ['class' => 'form-control', 'placeholder' => 'Passing Year']) !!}
        <span class="help-block text-danger">
            {{ $errors->first('year') }}
        </span>
    </div>
</div>

{{-- remarks --}}
<div class="form-group{{ $errors->has('remarks') ? ' has-error' : '' }}">
    {!! Form::label('remarks', 'Remarks', ['class' => 'col-sm-3 control-label']) !!}
    <div class="col-sm-8">
        {!! Form::textarea('remarks', null, ['class' => 'html-editor', 'placeholder' => 'Remarks']) !!}
        <span class="help-block text-danger">
            {{ $errors->first('remarks') }}
        </span>
    </div>
</div>