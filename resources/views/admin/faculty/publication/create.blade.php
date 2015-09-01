@extends('layout.admin')

@section('body')
    <h1>Create New Publication</h1>
    <hr>

    {!! Form::open(['url' => "admin/faculty/$facultyId/publication", 'class' => 'form-horizontal']) !!}

    <div class="form-group">
        {!! Form::label('', 'Faculty Name', ['class' => 'col-sm-3 control-label']) !!}
        <div class="col-sm-8">
            <label class="control-label">{{ $facultyName }}</label>
        </div>
    </div>

    @include('admin.faculty.publication._form')

    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-5">
            {!! Form::submit('Save Publication', ['class' => 'btn btn-success']) !!}
            <a href="{{ url("/admin/faculty/$facultyId") }}" class="btn btn-warning btn-margin-left">Cancel</a>
        </div>
    </div>

    {!! Form::close() !!}
@endsection
