@extends('layout.admin')

@section('body')
    <h1>
        Faculty Publication Detail
        <div class="pull-right">
            <a href="{{ url("/admin/faculty/{$publication->faculty->id}") }}" class="btn btn-primary"><i class="fa fa-list"></i> Go Back</a>
            <a href="{{ url("/admin/faculty/{$publication->faculty->id}/publication/{$publication->id}/edit") }}" class="btn btn-info"><i class="fa fa-edit"></i> Edit</a>
        </div>
    </h1>
    <hr>

    @include('flash::message')

    <div class="row">
        <div class="col-sm-12">
            <h2>{{ $publication->faculty->name }}</h2>
            <h4>{{ $publication->faculty->designation }}</h4>

            <table class="table table-striped bio-margin-top">
                <tbody>
                <tr>
                    <td>Publication Name</td>
                    <td>{{ $publication->name }}</td>
                </tr>
                <tr>
                    <td>Publication URL</td>
                    <td>{{ $publication->link }}</td>
                </tr>
                <tr>
                    <td>Publication Year</td>
                    <td>{{ $publication->year }}</td>
                </tr>
                <tr>
                    <td>Publication Type</td>
                    <td>{{ ucfirst($publication->type) }}</td>
                </tr>
                <tr>
                    <td>Research Area</td>
                    <td>{{ implode(', ', $publication->researchArea->pluck('name')->all()) }}</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="row bio-margin-top">
        <div class="col-sm-12">
            {!! html_entity_decode($publication->description) !!}
        </div>
    </div>
@endsection