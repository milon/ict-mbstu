@extends('layout.admin')

@section('body')

    @include('layout.partials.modal')

    <h1>
        Alumni List
        <a href="{{ url('/admin/alumni/create') }}" class="btn btn-success pull-right">
            <i class="fa fa-plus"></i> 
            Add
        </a>
    </h1>
    <hr>

    @include('flash::message')

    <table class="table table-bordered table-striped dataTable">
        <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Year</th>
            <th>Email</th>
            <th>Action</th>
        </tr>
        </thead>
        
        <tbody>
            @if(count($alumniList))
                @foreach ($alumniList as $alumni)
                    <tr>
                        <td>{{ $alumni->student_id }}</td>
                        <td>{{ $alumni->name }}</td>
                        <td>{{ $alumni->passing_year }}</td>
                        <td>{{ $alumni->email }}</td>
                        <td>
                            <a href="{{ url("/admin/alumni/{$alumni->id}") }}" class="btn btn-xs btn-success"><i class="fa fa-eye"></i></a>
                            <a href="{{ url("/admin/alumni/{$alumni->id}/edit") }}" class="btn btn-xs btn-info"><i class="fa fa-edit"></i></a>
                            <a href="{{ url("/admin/alumni/{$alumni->id}") }}" class="btn btn-xs btn-danger" data-token="{{ csrf_token() }}" data-method="DELETE" data-confirm="true"><i class="fa fa-trash-o"></i></a>
                        </td>
                    </tr>
                @endforeach
            @endif
        </tbody>
        
    </table>
@endsection