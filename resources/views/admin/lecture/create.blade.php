@extends('layout.admin')

@section('body')
    <h1>Create New Lecture</h1>
    <hr>

    {!! Form::open(['url' => 'admin/lecture', 'class' => 'form-horizontal', 'files' => true]) !!}

    @include('admin.lecture._form')

    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-5">
            {!! Form::submit('Save Lecture', ['class' => 'btn btn-success']) !!}
            <a href="{{ url('/admin/lecture') }}" class="btn btn-warning btn-margin-left">Cancel</a>
        </div>
    </div>

    {!! Form::close() !!}
@endsection
