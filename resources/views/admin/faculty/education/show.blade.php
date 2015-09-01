@extends('layout.admin')

@section('body')
    <h1>
        Faculty Education Detail
        <div class="pull-right">
            <a href="{{ url("/admin/faculty/{$education->faculty->id}") }}" class="btn btn-primary"><i class="fa fa-list"></i> Go Back</a>
            <a href="{{ url("/admin/faculty/{$education->faculty->id}/education/{$education->id}/edit") }}" class="btn btn-info"><i class="fa fa-edit"></i> Edit</a>
        </div>
    </h1>
    <hr>

    @include('flash::message')

    <div class="row">
        <div class="col-sm-12">
            <h2>{{ $education->faculty->name }}</h2>
            <h4>{{ $education->faculty->designation }}</h4>

            <table class="table table-striped bio-margin-top">
                <tbody>
                <tr>
                    <td>Name of Degree</td>
                    <td>{{ $education->name_of_degree }}</td>
                </tr>
                <tr>
                    <td>Institute Name</td>
                    <td>{{ $education->institute }}</td>
                </tr>
                <tr>
                    <td>Passing Year</td>
                    <td>{{ $education->year }}</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="row bio-margin-top">
        <div class="col-sm-12">
            {!! html_entity_decode($education->remarks) !!}
        </div>
    </div>
@endsection