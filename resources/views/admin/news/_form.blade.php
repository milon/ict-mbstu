{{-- Title --}}
<div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
    {!! Form::label('title', 'Title', ['class' => 'col-sm-3 control-label']) !!}
    <div class="col-sm-8">
        {!! Form::text('title', null, ['class' => 'form-control']) !!}
        <span class="help-block text-danger">
            {{ $errors -> first('title') }}
        </span>
    </div>
</div>

{{-- published at --}}
<div class="form-group{{ $errors->has('published_at') ? ' has-error' : '' }}">
    {!! Form::label('published_at', 'Published At', ['class' => 'col-sm-3 control-label']) !!}
    <div class="col-sm-8">
        {!! Form::text('published_at', null, ['class' => 'form-control date-picker']) !!}
        <span class="help-block text-danger">
            {{ $errors -> first('published_at') }}
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
