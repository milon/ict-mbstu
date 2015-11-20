@extends('frontend.layout.frontend')

@section('content')
    @include('frontend.lecture._title')

    <section id="recent-works">
        <div class="container">
            <div class="center wow fadeInDown">

                <table class="table table-striped dataTable">
                    <thead>
                    <tr>
                        <th>Lecture Title</th>
                        <th>Lecture By</th>
                        <th>Time</th>
                        <th>Detail</th>
                    </tr>
                    </thead>

                    <tbody>
                    @if(count($lectureList))
                        @foreach($lectureList as $lecture)
                            <tr>
                                <td>{{ $lecture->title }}</td>
                                <td>{{ $lecture->creator->name }}</td>
                                <td>{{ $lecture->created_at->toDateString() }}</td>
                                <td><a href="{{ url("/lecture/{$lecture->id}") }}" class="btn btn-xs btn-success"><i class="fa fa-eye"></i> Show</a></td>
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
