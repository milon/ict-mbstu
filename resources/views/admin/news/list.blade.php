@extends('layout.admin')

@section('body')

    @include('layout.partials.modal')

    <h1>
        News List
        <a href="{{ url('/admin/news/create') }}" class="btn btn-success pull-right">
            <i class="fa fa-plus"></i> 
            Add
        </a>
    </h1>
    <hr>

    @include('flash::message')

    <table class="table table-bordered table-striped dataTable">
        <thead>
        <tr>
            <th width="60%">Title</th>
            <th width="20%">Published At</th>
            <th width="20%">Action</th>
        </tr>
        </thead>
        
        <tbody>
            @if(count($newsList))
                @foreach ($newsList as $news)
                    <tr>
                        <td>{{ $news->title }}</td>
                        <td>{{ $news->published_at->toDateString() }}</td>
                        <td>
                            <a href="{{ url("/admin/news/{$news->id}") }}" class="btn btn-xs btn-success"><i class="fa fa-eye"></i></a>
                            <a href="{{ url("/admin/news/{$news->id}/edit") }}" class="btn btn-xs btn-info"><i class="fa fa-edit"></i></a>
                            <a href="{{ url("/admin/news/{$news->id}") }}" class="btn btn-xs btn-danger" data-token="{{ csrf_token() }}" data-method="DELETE" data-confirm="true"><i class="fa fa-trash-o"></i></a>
                        </td>
                    </tr>
                @endforeach
            @endif
        </tbody>
        
    </table>
@endsection