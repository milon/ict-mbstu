@extends('frontend.layout.frontend')

@section('content')
    <section id="feature" >
        <div class="container">
            <div class="center wow fadeInDown">
                <h2>Department of ICT Alumni</h2>
                <p class="lead">
                    Department of ICT has a bunch of former student who are working at various company of Bangladesh as well as foreign countries.
                </p>
            </div>
        </div><!--/.container-->
    </section>

    <section id="recent-works" >
        <div class="container">
            <div class="center wow fadeInDown">
                <table class="table table-striped">
                    <tbody>
                    <tr>
                        <td>Name</td>
                        <td>{{ $alumni->name }}</td>
                    </tr>
                    <tr>
                        <td>Student ID</td>
                        <td>{{ $alumni->student_id }}</td>
                    </tr>
                    <tr>
                        <td>Degree</td>
                        <td>{{ $alumni->degree }}</td>
                    </tr>
                    <tr>
                        <td>Passing Year</td>
                        <td>{{ $alumni->passing_year }}</td>
                    </tr>
                    <tr>
                        <td>Email Address</td>
                        <td>{{ $alumni->email }}</td>
                    </tr>
                    <tr>
                        <td>Phone Number</td>
                        <td>{{ $alumni->phone }}</td>
                    </tr>
                    <tr>
                        <td>Website</td>
                        <td>{{ $alumni->website }}</td>
                    </tr>
                    </tbody>
                </table>

                <p class="lead">
                    {!! html_entity_decode($alumni->description) !!}
                </p>
            </div>
        </div><!--/.container-->
    </section>
@endsection