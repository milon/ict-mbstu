@extends('layout.admin')

@section('body')

    @include('layout.partials.modal')

    <h1>
        Research Area List
        <a href="{{ url('/admin/research_area/create') }}" class="btn btn-success pull-right">
            <i class="fa fa-plus"></i> 
            Add
        </a>
    </h1>
    <hr>

    @include('flash::message')

    <table class="table table-bordered table-striped dataTable">
        <thead>
        <tr>
            <th width="75%">Name</th>
            <th width="25%">Action</th>
        </tr>
        </thead>
        
        <tbody>
            @if(count($researchAreaList))
                @foreach ($researchAreaList as $researchArea)
                    <tr>
                        <td>{{ $researchArea->name }}</td>
                        <td>
                            <a href="{{ url("/admin/research_area/{$researchArea->id}/edit") }}" class="btn btn-xs btn-info"><i class="fa fa-edit"></i></a>
                            <a href="{{ url("/admin/research_area/{$researchArea->id}") }}" class="btn btn-xs btn-danger" data-token="{{ csrf_token() }}" data-method="DELETE" data-confirm="true"><i class="fa fa-trash-o"></i></a>
                        </td>
                    </tr>
                @endforeach
            @endif
        </tbody>
        
    </table>
@endsection