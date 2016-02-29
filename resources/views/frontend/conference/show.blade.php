@extends('frontend.layout.frontend')

@section('content')
    @include('frontend.conference._title')

    <section id="recent-works faculty-detail">
        <div class="container">
            <div class="wow fadeInDown">

                <h1>{{ $conference->name }}</h1>
                <h2>{{ $conference->faculty->name }}</h2>

                <h3>
                    Conference Year: {{ $conference->year }} <br>
                    Research Area: {{ implode(', ', $conference->researchArea->pluck('name')->all()) }}
                </h3>

                <div class="m-top-20">
                    {!! html_entity_decode($conference->description) !!}
                </div>
            </div>
        </div>
    </section>
@endsection
