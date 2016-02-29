@extends('layout.admin')

@section('body')
    <h1>Edit Lecture</h1>
    <hr>

    {!! Form::model($lecture, ['method' => 'put', 'files' => true, 'url' => "admin/lecture/{$lecture->id}", 'class' => 'form-horizontal']) !!}

    @include('admin.lecture._form')

    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-5">
            {!! Form::submit('Update Lecture', ['class' => 'btn btn-success']) !!}
            <a href="{{ url('/admin/lecture') }}" class="btn btn-warning btn-margin-left">Cancel</a>
        </div>
    </div>

    {!! Form::close() !!}
@endsection
