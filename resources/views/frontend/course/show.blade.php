@extends('frontend.layout.frontend')

@section('content')
    @include('frontend.course._title')

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
