@extends('frontend.layout.frontend')

@section('content')
    @include('frontend.course._title')

    @foreach($semesterList as $key => $semester)

        <section {{ ($key % 2 == 0)?'':'id=feature' }} class="faculty-detail">
            <div class="container">
                <div class="wow fadeInDown">
                    <h1 class="text-center">{{ $semester }}</h1>

                    <table class="table table-striped m-top-20">
                        @include('frontend.course._table_header')

                        <tbody>
                            @include('frontend.course._body', ['semester' => $key+1])
                        </tbody>
                    </table>
                </div>
            </div>
        </section>

    @endforeach

@endsection
