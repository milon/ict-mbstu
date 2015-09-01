@extends('layout.admin')

@section('body')

    @include('layout.partials.modal')

    <h1>
        Research Group List
        <a href="{{ url('/admin/research_group/create') }}" class="btn btn-success pull-right">
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
            <th>Co-Ordinator</th>
            <th>Action</th>
        </tr>
        </thead>
        
        <tbody>
            @if(count($researchGroupList))
                @foreach ($researchGroupList as $researchGroup)
                    <tr>
                        <td>{{ $researchGroup->name }}</td>
                        <td>{{ $facultyList[$researchGroup->co_ordinator] }}</td>
                        <td>
                            <a href="{{ url("/admin/research_group/{$researchGroup->id}") }}" class="btn btn-xs btn-success"><i class="fa fa-eye"></i></a>
                            <a href="{{ url("/admin/research_group/{$researchGroup->id}/edit") }}" class="btn btn-xs btn-info"><i class="fa fa-edit"></i></a>
                            <a href="{{ url("/admin/research_group/{$researchGroup->id}") }}" class="btn btn-xs btn-danger" data-token="{{ csrf_token() }}" data-method="DELETE" data-confirm="true"><i class="fa fa-trash-o"></i></a>
                        </td>
                    </tr>
                @endforeach
            @endif
        </tbody>
        
    </table>
@endsection