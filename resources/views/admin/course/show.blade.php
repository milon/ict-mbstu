@extends('layout.admin')

@section('body')
    <h1>
        Course Detail
        <div class="pull-right">
            <a href="{{ url('/admin/course') }}" class="btn btn-primary"><i class="fa fa-list"></i> Go Back</a>
            <a href="{{ url("/admin/course/{$course->id}/edit") }}" class="btn btn-info"><i class="fa fa-edit"></i> Edit</a>
        </div>
    </h1>
    <hr>

    @include('flash::message')

    <h2>{{ $course->code }} {{ $course->name }}</h2>
    <h4>{{ $semesterList[$course->semester] }} - {{ $course->credit }} Credit Hour</h4>

    <div>
        {!! html_entity_decode($course->description) !!}
    </div>
@endsection