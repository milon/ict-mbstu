@extends('layout.admin')

@section('body')

    @include('layout.partials.modal')

    <h1>
        Lecture List
        <a href="{{ url('/admin/lecture/create') }}" class="btn btn-success pull-right">
            <i class="fa fa-plus"></i>
            Add
        </a>
    </h1>
    <hr>

    @include('flash::message')

    <table class="table table-bordered table-striped dataTable">
        <thead>
        <tr>
            <th>Title</th>
            <th>Lecture By</th>
            <th>Action</th>
        </tr>
        </thead>

        <tbody>
        @if(count($lectureList))
            @foreach ($lectureList as $lecture)
                <tr>
                    <td>{{ $lecture->title }}</td>
                    <td>{{ $lecture->creator->name }}</td>
                    <td>
                        <a href="{{ url("/admin/lecture/{$lecture->id}") }}" class="btn btn-xs btn-success"><i class="fa fa-eye"></i></a>
                        <a href="{{ url("/admin/lecture/{$lecture->id}/edit") }}" class="btn btn-xs btn-info"><i class="fa fa-edit"></i></a>
                        <a href="{{ url("/admin/lecture/{$lecture->id}") }}" class="btn btn-xs btn-danger" data-token="{{ csrf_token() }}" data-method="DELETE" data-confirm="true"><i class="fa fa-trash-o"></i></a>
                    </td>
                </tr>
            @endforeach
        @endif
        </tbody>

    </table>
@endsection
