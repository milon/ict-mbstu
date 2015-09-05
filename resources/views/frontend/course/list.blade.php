@extends('frontend.layout.frontend')

@section('content')
    <section id="feature" >
        <div class="container">
            <div class="center wow fadeInDown">
                <h2>Course Syllabus</h2>
                <p class="lead">
                    Department of Information and Communication Technology have a world class course curriculum.
                </p>
            </div>
        </div><!--/.container-->
    </section>

    <section class="faculty-detail">
        <div class="container">
            <div class="wow fadeInDown">
                <h1 class="text-center">First Year First Semester</h1>

                <table class="table table-striped m-top-20">
                    <thead>
                    <tr>
                        <th>Course Code</th>
                        <th>Course Title</th>
                        <th>Credit</th>
                    </tr>
                    </thead>

                    <tbody>
                        @foreach($courseList->where('semester', '1') as $course)
                            <tr>
                                <td>
                                    <a href="{{ url("/course/{$course->id}") }}">
                                        {{ $course->code }}
                                    </a>
                                </td>
                                <td>{{ $course->name }}</td>
                                <td>{{ $course->credit }}</td>
                            </tr>

                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <section id="feature"  class="faculty-detail">
        <div class="container">
            <div class="wow fadeInDown">
                <h1 class="text-center">First Year Second Semester</h1>

                <table class="table table-striped m-top-20">
                    <thead>
                    <tr>
                        <th>Course Code</th>
                        <th>Course Title</th>
                        <th>Credit</th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach($courseList->where('semester', '2') as $course)
                        <tr>
                            <td>
                                <a href="{{ url("/course/{$course->id}") }}">
                                    {{ $course->code }}
                                </a>
                            </td>
                            <td>{{ $course->name }}</td>
                            <td>{{ $course->credit }}</td>
                        </tr>

                    @endforeach
                    </tbody>
                </table>
            </div>
        </div><!--/.container-->
    </section>

    <section class="faculty-detail">
        <div class="container">
            <div class="wow fadeInDown">
                <h1 class="text-center">Second Year First Semester</h1>

                <table class="table table-striped m-top-20">
                    <thead>
                    <tr>
                        <th>Course Code</th>
                        <th>Course Title</th>
                        <th>Credit</th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach($courseList->where('semester', '3') as $course)
                        <tr>
                            <td>
                                <a href="{{ url("/course/{$course->id}") }}">
                                    {{ $course->code }}
                                </a>
                            </td>
                            <td>{{ $course->name }}</td>
                            <td>{{ $course->credit }}</td>
                        </tr>

                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <section id="feature"  class="faculty-detail">
        <div class="container">
            <div class="wow fadeInDown">
                <h1 class="text-center">Second Year Second Semester</h1>

                <table class="table table-striped m-top-20">
                    <thead>
                    <tr>
                        <th>Course Code</th>
                        <th>Course Title</th>
                        <th>Credit</th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach($courseList->where('semester', '4') as $course)
                        <tr>
                            <td>
                                <a href="{{ url("/course/{$course->id}") }}">
                                    {{ $course->code }}
                                </a>
                            </td>
                            <td>{{ $course->name }}</td>
                            <td>{{ $course->credit }}</td>
                        </tr>

                    @endforeach
                    </tbody>
                </table>
            </div>
        </div><!--/.container-->
    </section>

    <section class="faculty-detail">
        <div class="container">
            <div class="wow fadeInDown">
                <h1 class="text-center">Third Year First Semester</h1>

                <table class="table table-striped m-top-20">
                    <thead>
                    <tr>
                        <th>Course Code</th>
                        <th>Course Title</th>
                        <th>Credit</th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach($courseList->where('semester', '5') as $course)
                        <tr>
                            <td>
                                <a href="{{ url("/course/{$course->id}") }}">
                                    {{ $course->code }}
                                </a>
                            </td>
                            <td>{{ $course->name }}</td>
                            <td>{{ $course->credit }}</td>
                        </tr>

                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <section id="feature"  class="faculty-detail">
        <div class="container">
            <div class="wow fadeInDown">
                <h1 class="text-center">Third Year Second Semester</h1>

                <table class="table table-striped m-top-20">
                    <thead>
                    <tr>
                        <th>Course Code</th>
                        <th>Course Title</th>
                        <th>Credit</th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach($courseList->where('semester', '6') as $course)
                        <tr>
                            <td>
                                <a href="{{ url("/course/{$course->id}") }}">
                                    {{ $course->code }}
                                </a>
                            </td>
                            <td>{{ $course->name }}</td>
                            <td>{{ $course->credit }}</td>
                        </tr>

                    @endforeach
                    </tbody>
                </table>
            </div>
        </div><!--/.container-->
    </section>

    <section class="faculty-detail">
        <div class="container">
            <div class="wow fadeInDown">
                <h1 class="text-center">Fourth Year First Semester</h1>

                <table class="table table-striped m-top-20">
                    <thead>
                    <tr>
                        <th>Course Code</th>
                        <th>Course Title</th>
                        <th>Credit</th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach($courseList->where('semester', '7') as $course)
                        <tr>
                            <td>
                                <a href="{{ url("/course/{$course->id}") }}">
                                    {{ $course->code }}
                                </a>
                            </td>
                            <td>{{ $course->name }}</td>
                            <td>{{ $course->credit }}</td>
                        </tr>

                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <section id="feature"  class="faculty-detail">
        <div class="container">
            <div class="wow fadeInDown">
                <h1 class="text-center">Fourth Year Second Semester</h1>

                <table class="table table-striped m-top-20">
                    <thead>
                    <tr>
                        <th>Course Code</th>
                        <th>Course Title</th>
                        <th>Credit</th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach($courseList->where('semester', '8') as $course)
                        <tr>
                            <td>
                                <a href="{{ url("/course/{$course->id}") }}">
                                    {{ $course->code }}
                                </a>
                            </td>
                            <td>{{ $course->name }}</td>
                            <td>{{ $course->credit }}</td>
                        </tr>

                    @endforeach
                    </tbody>
                </table>
            </div>
        </div><!--/.container-->
    </section>

    <section class="faculty-detail">
        <div class="container">
            <div class="wow fadeInDown">
                <h1 class="text-center">Masters First Semester</h1>

                <table class="table table-striped m-top-20">
                    <thead>
                    <tr>
                        <th>Course Code</th>
                        <th>Course Title</th>
                        <th>Credit</th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach($courseList->where('semester', '9') as $course)
                        <tr>
                            <td>
                                <a href="{{ url("/course/{$course->id}") }}">
                                    {{ $course->code }}
                                </a>
                            </td>
                            <td>{{ $course->name }}</td>
                            <td>{{ $course->credit }}</td>
                        </tr>

                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <section id="feature"  class="faculty-detail">
        <div class="container">
            <div class="wow fadeInDown">
                <h1 class="text-center">Masters Second Semester</h1>

                <table class="table table-striped m-top-20">
                    <thead>
                    <tr>
                        <th>Course Code</th>
                        <th>Course Title</th>
                        <th>Credit</th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach($courseList->where('semester', '10') as $course)
                        <tr>
                            <td>
                                <a href="{{ url("/course/{$course->id}") }}">
                                    {{ $course->code }}
                                </a>
                            </td>
                            <td>{{ $course->name }}</td>
                            <td>{{ $course->credit }}</td>
                        </tr>

                    @endforeach
                    </tbody>
                </table>
            </div>
        </div><!--/.container-->
    </section>

    <section class="faculty-detail">
        <div class="container">
            <div class="wow fadeInDown">
                <h1 class="text-center">Masters Third Semester</h1>

                <table class="table table-striped m-top-20">
                    <thead>
                    <tr>
                        <th>Course Code</th>
                        <th>Course Title</th>
                        <th>Credit</th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach($courseList->where('semester', '11') as $course)
                        <tr>
                            <td>
                                <a href="{{ url("/course/{$course->id}") }}">
                                    {{ $course->code }}
                                </a>
                            </td>
                            <td>{{ $course->name }}</td>
                            <td>{{ $course->credit }}</td>
                        </tr>

                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>

@endsection