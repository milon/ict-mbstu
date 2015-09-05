@extends('frontend.layout.frontend')

@section('content')
    <section id="feature" >
        <div class="container">
            <div class="center wow fadeInDown">
                <h2>Research Area</h2>
                <p class="lead">
                    The faculties and students of Department of Information and Communication Technology are doing research on various research areas.
                </p>
            </div>
        </div><!--/.container-->
    </section>

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