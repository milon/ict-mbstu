@extends('layout.admin')

@section('body')
    <h1>Edit Faculty Publication</h1>
    <hr>

    {!! Form::model($publication, ['method' => 'put', 'url' => "admin/faculty/$facultyId/publication/{$publication->id}", 'class' => 'form-horizontal']) !!}

    @include('admin.faculty.publication._form')

    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-5">
            {!! Form::submit('Update Faculty Publication', ['class' => 'btn btn-success']) !!}
            <a href="{{ url("/admin/faculty/$facultyId") }}" class="btn btn-warning btn-margin-left">Cancel</a>
        </div>
    </div>

    {!! Form::close() !!}
@endsection