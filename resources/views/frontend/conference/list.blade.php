@extends('frontend.layout.frontend')

@section('content')
    @include('frontend.conference._title')

    <section id="recent-works faculty-detail">
        <div class="container">
            <div class="wow fadeInDown">

                @if(count($conferenceList))
                    <ul>
                        @foreach($conferenceList as $conference)
                            <li>
                                <a href="{{ url("/conference/{$conference->id}") }}">
                                    {{ $conference->name }} ({{ $conference->year }})
                                </a>
                            </li>
                        @endforeach
                    </ul>
                @else
                    <h1 class="text-center">
                        No Conference Paper Found
                    </h1>
                @endif

            </div>
        </div>
    </section>
@endsection
