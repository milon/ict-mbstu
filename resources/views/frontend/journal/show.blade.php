@extends('frontend.layout.frontend')

@section('content')
    <section id="feature" >
        <div class="container">
            <div class="center wow fadeInDown">
                <h2>Journal Publication</h2>
                <p class="lead">
                    A vast number of publications have been make to various journal all over the world by our faculties and students.
                </p>
            </div>
        </div><!--/.container-->
    </section>

    <section id="recent-works faculty-detail">
        <div class="container">
            <div class="wow fadeInDown">

                <h1>{{ $journal->name }}</h1>
                <h2>{{ $journal->faculty->name }}</h2>

                <h3>
                    Published Year: {{ $journal->year }} <br>
                    Research Area: {{ implode(', ', $journal->researchArea->pluck('name')->all()) }}
                </h3>

                <div class="m-top-20">
                    {!! html_entity_decode($journal->description) !!}
                </div>
            </div>
        </div>
    </section>
@endsection