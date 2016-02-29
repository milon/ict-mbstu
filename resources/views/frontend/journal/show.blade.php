@extends('frontend.layout.frontend')

@section('content')
    @include('frontend.journal._title')

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
