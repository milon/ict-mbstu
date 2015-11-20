@extends('layout.admin')

@section('body')
    <h1>
        Lecture Detail
        <div class="pull-right">
            <a href="{{ url('/admin/lecture') }}" class="btn btn-primary"><i class="fa fa-list"></i> Go Back</a>
            <a href="{{ url("/admin/lecture/{$lecture->id}/edit") }}" class="btn btn-info"><i class="fa fa-edit"></i> Edit</a>
        </div>
    </h1>
    <hr>

    @include('flash::message')

    <h2>{{ $lecture->title }}</h2>
    <div>
        {!! html_entity_decode($lecture->description) !!}
    </div>
    @if(!empty($lecture->file_path))
        <p>
            <a href="{{ url($lecture->file_path) }}" download>
                <i class="fa fa-download"></i> Download Attachment
            </a>
        </p>
    @endif
@endsection
