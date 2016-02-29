@extends('frontend.layout.frontend')

@section('content')
    @include('frontend.alumni._title')

    <section id="recent-works">
        <div class="container">
            <div class="center wow fadeInDown">

                <table class="table table-striped dataTable">
                    <thead>
                    <tr>
                        <th>Student ID</th>
                        <th>Name</th>
                        <th>Year</th>
                        <th>Degree</th>
                        <th>Detail</th>
                    </tr>
                    </thead>

                    <tbody>
                    @if(count($alumniList))
                        @foreach($alumniList as $alumni)
                            <tr>
                                <td>{{ $alumni->student_id }}</td>
                                <td>{{ $alumni->name }}</td>
                                <td>{{ $alumni->passing_year }}</td>
                                <td>{{ $alumni->degree }}</td>
                                <td><a href="{{ url("/alumni/{$alumni->id}") }}" class="btn btn-xs btn-success"><i class="fa fa-eye"></i> Show</a></td>
                            </tr>
                        @endforeach
                    @endif
                    </tbody>
                </table>

            </div>
        </div><!--/.container-->
    </section>

@endsection

@section('style')
    <link type="text/css" href="{{ url('/admin_panel/datatables/css/dataTables.bootstrap.min.css') }}" rel="stylesheet">
    <style>
        .dataTable, .dataTables_length, .dataTables_info{
            text-align: left;
        }

        .dataTable thead tr th{
            text-align: center;
        }
    </style>
@endsection

@section('script')
    <script src="{{ url('/admin_panel/datatables/js/jquery.dataTables.js') }}"></script>
    <script src="{{ url('/admin_panel/datatables/js/dataTables.bootstrap.min.js') }}"></script>
    <script>
        (function(){
            $('table.dataTable').dataTable({
                "lengthMenu": [[5, 10, 20, -1], [5, 10, 20, "All"]],
                "pageLength": 20,
                "order": [[0, 'desc']],
                "stateSave": true,
                "pagingType": "simple_numbers"
            });
        })();
    </script>
@endsection
