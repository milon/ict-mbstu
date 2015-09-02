@extends('layout.admin')

@section('body')
    <h1>Edit Faculty Education</h1>
    <hr>

    {!! Form::model($education, ['method' => 'put', 'url' => "admin/faculty/$facultyId/education/{$education->id}", 'class' => 'form-horizontal']) !!}

    @include('admin.faculty.education._form')

    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-5">
            {!! Form::submit('Update Faculty Education', ['class' => 'btn btn-success']) !!}
            <a href="{{ url("/admin/faculty/$facultyId") }}" class="btn btn-warning btn-margin-left">Cancel</a>
        </div>
    </div>

    {!! Form::close() !!}
@endsection