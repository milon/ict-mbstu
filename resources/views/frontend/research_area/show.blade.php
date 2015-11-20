@extends('frontend.layout.frontend')

@section('content')
    @include('frontend.research_area._title')

    <section id="recent-works faculty-detail">
        <div class="container">
            <div class="wow fadeInDown">

                <h1>{{ $researchArea->name }}</h1>

                @if(count($researchArea->publication->where('type', 'journal')))
                    <h2 class="m-top-20">Journal Publication</h2>
                    <ul>
                        @foreach($researchArea->publication->where('type', 'journal') as $journal)
                            <li>
                                <a href="{{ url("/journal/{$journal->id}") }}">
                                    {{ $journal->name }} ({{ $journal->year }})
                                </a>
                            </li>
                        @endforeach
                    </ul>
                @endif

                @if(count($researchArea->publication->where('type', 'conference')))
                    <h2 class="m-top-20">Conference Paper</h2>
                    <ul>
                        @foreach($researchArea->publication->where('type', 'conference') as $conference)
                            <li>
                                <a href="{{ url("/conference/{$conference->id}") }}">
                                    {{ $conference->name }} ({{ $conference->year }})
                                </a>
                            </li>
                        @endforeach
                    </ul>
                @endif

            </div>
        </div>
    </section>
@endsection
