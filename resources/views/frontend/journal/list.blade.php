@extends('frontend.layout.frontend')

@section('content')
    @include('frontend.journal._title')

    <section id="recent-works faculty-detail">
        <div class="container">
            <div class="wow fadeInDown">

                @if(count($journalList))
                    <ul>
                        @foreach($journalList as $journal)
                            <li>
                                <a href="{{ url("/journal/{$journal->id}") }}">
                                    {{ $journal->name }} ({{ $journal->year }})
                                </a>
                            </li>
                        @endforeach
                    </ul>
                @else
                    <h1 class="text-center">No Journal Publication Found</h1>
                @endif

            </div>
        </div>
    </section>
@endsection
