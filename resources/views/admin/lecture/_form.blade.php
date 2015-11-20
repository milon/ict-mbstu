{{-- Title --}}
<div class="form-group{{ $errors->has('code') ? ' has-error' : '' }}">
    {!! Form::label('title', 'Lecture Title', ['class' => 'col-sm-3 control-label']) !!}
    <div class="col-sm-8">
        <span class="help-block text-danger">
        {!! Form::text('title', null, ['class' => 'form-control']) !!}
            {{ $errors -> first('title') }}
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

{{-- Attachment --}}
<div class="form-group{{ $errors->has('attachment') ? ' has-error' : '' }}">
    {!! Form::label('attachemnt', 'Attachment', ['class' => 'col-sm-3 control-label']) !!}
    <div class="col-sm-8">
        <div class="fileinput fileinput-new input-group" data-provides="fileinput">
		  	<div class="form-control" data-trigger="fileinput">
			  	<i class="glyphicon glyphicon-file fileinput-exists"></i>
			  	<span class="fileinput-filename"></span>
		  	</div>
	  		<span class="input-group-addon btn btn-default btn-file">
		  		<span class="fileinput-new">Select file</span>
		  		<span class="fileinput-exists">Change</span>
		  		{!! Form::file('attachment') !!}
	  		</span>
	  		<a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
		</div>
		<span class="help-block text-danger">
            {{ $errors -> first('attachment') }}
        </span>
    </div>
</div>
