@extends('frontend.layout.frontend')

@section('content')
    @include('frontend.research_area._title')

    <section id="recent-works faculty-detail">
        <div class="container">
            <div class="wow fadeInDown">

                @if(count($researchAreaList))
                    <ul>
                        @foreach($researchAreaList as $area)
                            <li>
                                <a href="{{ url("/research_area/{$area->id}") }}">
                                    {{ $area->name }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                @else
                    <h1 class="text-center">No Research Area Found.</h1>
                @endif
            </div>
        </div>
    </section>
@endsection
