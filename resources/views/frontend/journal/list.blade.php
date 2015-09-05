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