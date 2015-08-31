@extends('layout.admin')

@section('body')
    <h1>Edit Course</h1>
    <hr>

    {!! Form::model($course, ['method' => 'put', 'url' => "admin/course/{$course->id}", 'class' => 'form-horizontal']) !!}

    @include('admin.course._form')

    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-5">
            {!! Form::submit('Update Course', ['class' => 'btn btn-success']) !!}
            <a href="{{ url('/admin/course') }}" class="btn btn-warning btn-margin-left">Cancel</a>
        </div>
    </div>

    {!! Form::close() !!}
@endsection