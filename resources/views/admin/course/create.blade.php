@extends('layout.admin')

@section('body')
    <h1>Create New Course</h1>
    <hr>

    {!! Form::open(['url' => 'admin/course', 'class' => 'form-horizontal']) !!}

    @include('admin.course._form')

    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-5">
            {!! Form::submit('Save Course', ['class' => 'btn btn-success']) !!}
            <a href="{{ url('/admin/course') }}" class="btn btn-warning btn-margin-left">Cancel</a>
        </div>
    </div>

    {!! Form::close() !!}
@endsection