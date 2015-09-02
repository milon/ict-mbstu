{{-- Name --}}
<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
    {!! Form::label('name', 'Publication Name', ['class' => 'col-sm-3 control-label']) !!}
    <div class="col-sm-8">
        {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Publication Name']) !!}
        <span class="help-block text-danger">
            {{ $errors -> first('name') }}
        </span>
    </div>
</div>

{{-- link --}}
<div class="form-group{{ $errors->has('link') ? ' has-error' : '' }}">
    {!! Form::label('link', 'Publication URL', ['class' => 'col-sm-3 control-label']) !!}
    <div class="col-sm-8">
        {!! Form::text('link', null, ['class' => 'form-control', 'placeholder' => 'Publication URL']) !!}
        <span class="help-block text-danger">
            {{ $errors->first('link') }}
        </span>
    </div>
</div>


{{-- year --}}
<div class="form-group{{ $errors->has('year') ? ' has-error' : '' }}">
    {!! Form::label('year', 'Publication Year', ['class' => 'col-sm-3 control-label']) !!}
    <div class="col-sm-8">
        {!! Form::text('year', null, ['class' => 'form-control', 'placeholder' => 'Publication Year']) !!}
        <span class="help-block text-danger">
            {{ $errors->first('year') }}
        </span>
    </div>
</div>

{{-- type --}}
<div class="form-group{{ $errors->has('type') ? ' has-error' : '' }}">
    {!! Form::label('type', 'Publication Type', ['class' => 'col-sm-3 control-label']) !!}
    <div class="col-sm-8">
        {!! Form::select('type', $typeList, null, ['class' => 'form-control select2']) !!}
        <span class="help-block text-danger">
            {{ $errors->first('year') }}
        </span>
    </div>
</div>

{{-- research_area --}}
<div class="form-group{{ $errors->has('research_area_id') ? ' has-error' : '' }}">
    {!! Form::label('research_area_id', 'Research Area', ['class' => 'col-sm-3 control-label']) !!}
    <div class="col-sm-8">
        {!! Form::select('research_area_id[]', $researchAreaList, isset($publication)?$publication->researchArea->pluck('id')->all():null, ['multiple', 'class' => 'form-control select2']) !!}
        <span class="help-block text-danger">
            {{ $errors->first('research_area_id') }}
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