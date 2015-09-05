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
                <h1 class="text-center">
                    {{ $course->code }}:
                    {{ $course->name }}
                </h1>
                <h2 class="text-center">Credit Hour: {{ $course->credit }}</h2>

                <p class="lead m-top-20">
                    {!! html_entity_decode($course->description) !!}
                </p>
            </div>
        </div>
    </section>
@endsection