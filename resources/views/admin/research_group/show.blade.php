@extends('layout.admin')

@section('body')
    <h1>
        Research Group Detail
        <div class="pull-right">
            <a href="{{ url('/admin/research_group') }}" class="btn btn-primary"><i class="fa fa-list"></i> Go Back</a>
            <a href="{{ url("/admin/research_group/{$researchGroup->id}/edit") }}" class="btn btn-info"><i class="fa fa-edit"></i> Edit</a>
        </div>
    </h1>
    <hr>

    @include('flash::message')

    <h2>{{ $researchGroup->name }}</h2>
    <h4>{{ $researchGroup->coOrdinator->name }}</h4>

    <div class="bio-margin-top">
        {!! html_entity_decode($researchGroup->description) !!}
    </div>
@endsection