@extends('frontend.layout.frontend')

@section('content')
    <section id="feature" >
        <div class="container">
            <div class="center wow fadeInDown">
                <h2>Department of ICT Faculty</h2>
                <p class="lead">
                    Department of ICT have some great faculty members
                </p>
            </div>
        </div><!--/.container-->
    </section>

    <section id="recent-works">
        <div class="container">
            <div class="center wow fadeInDown">

                <div class="row">
                    @if(count($facultyList))
                        @foreach($facultyList as $faculty)
                            <div class="col-md-4 wow fadeInDown">
                                <div class="clients-comments text-center">
                                    <a href="{{ url("/faculty/{$faculty->id}") }}">
                                        <img src="{{ $faculty->avatar }}" class="img-circle" alt="">
                                        <h3>{{ $faculty->name }}</h3>
                                        <p>{{ $faculty->designation }}</p>
                                    </a>
                                </div>
                            </div>
                        @endforeach

                        <div class="clearfix"></div>
                        <div class="text-center">
                            {!! $facultyList->render() !!}
                        </div>
                    @else
                        <h1>No Faculty Listed Yet.</h1>
                    @endif
                </div>

            </div>
        </div>
    </section>
@endsection
