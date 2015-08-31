@extends('layout.admin')

@section('body')

    @include('layout.partials.modal')

    <h1>
        Course List
        <a href="{{ url('/admin/course/create') }}" class="btn btn-success pull-right">
            <i class="fa fa-plus"></i>
            Add
        </a>
    </h1>
    <hr>

    @include('flash::message')

    <table class="table table-bordered table-striped dataTable">
        <thead>
        <tr>
            <th>Code</th>
            <th>Name</th>
            <th>Semester</th>
            <th>Credit</th>
            <th>Action</th>
        </tr>
        </thead>

        <tbody>
        @if(count($courseList))
            @foreach ($courseList as $course)
                <tr>
                    <td>{{ $course->code }}</td>
                    <td>{{ $course->name }}</td>
                    <td>{{ $semesterList[$course->semester] }}</td>
                    <td>{{ $course->credit }}</td>
                    <td>
                        <a href="{{ url("/admin/course/{$course->id}") }}" class="btn btn-xs btn-success"><i class="fa fa-eye"></i></a>
                        <a href="{{ url("/admin/course/{$course->id}/edit") }}" class="btn btn-xs btn-info"><i class="fa fa-edit"></i></a>
                        <a href="{{ url("/admin/course/{$course->id}") }}" class="btn btn-xs btn-danger" data-token="{{ csrf_token() }}" data-method="DELETE" data-confirm="true"><i class="fa fa-trash-o"></i></a>
                    </td>
                </tr>
            @endforeach
        @endif
        </tbody>

    </table>
@endsection