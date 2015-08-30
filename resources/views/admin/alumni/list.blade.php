@extends('layout.admin')

@section('content')
    <div class="module">
        <div class="module-body">
            <section class="docs">
                <h1>
                    Alumni
                    <a href="{{ url('/admin/alumni/create') }}" class="btn-padding btn btn-success pull-right">Add</a>
                </h1>
                <hr>

                <table class="datatable-1 table table-bordered table-striped display">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Year</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                    </thead>

                </table>

            </section>
        </div>
    </div>
@endsection