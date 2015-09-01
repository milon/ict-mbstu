@extends('layout.admin')

@section('body')

    @include('layout.partials.modal')

    <h1>
        Faculty List
        <a href="{{ url('/admin/faculty/create') }}" class="btn btn-success pull-right">
            <i class="fa fa-plus"></i> 
            Add
        </a>
    </h1>
    <hr>

    @include('flash::message')

    <table class="table table-bordered table-striped dataTable">
        <thead>
        <tr>
            <th>Name</th>
            <th>Designation</th>
            <th>Email</th>
            <th>Website</th>
            <th>Action</th>
        </tr>
        </thead>
        
        <tbody>
            @if(count($facultyList))
                @foreach ($facultyList as $faculty)
                    <tr>
                        <td>{{ $faculty->name }}</td>
                        <td>{{ $faculty->designation }}</td>
                        <td>{{ $faculty->email }}</td>
                        <td>{{ $faculty->website }}</td>
                        <td>
                            <a href="{{ url("/admin/faculty/{$faculty->id}") }}" class="btn btn-xs btn-success"><i class="fa fa-eye"></i></a>
                            <a href="{{ url("/admin/faculty/{$faculty->id}/edit") }}" class="btn btn-xs btn-info"><i class="fa fa-edit"></i></a>
                            <a href="{{ url("/admin/faculty/{$faculty->id}") }}" class="btn btn-xs btn-danger" data-token="{{ csrf_token() }}" data-method="DELETE" data-confirm="true"><i class="fa fa-trash-o"></i></a>
                        </td>
                    </tr>
                @endforeach
            @endif
        </tbody>
        
    </table>
@endsection