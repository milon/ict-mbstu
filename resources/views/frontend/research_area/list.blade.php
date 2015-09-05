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

                <ul>
                    @foreach($researchAreaList as $area)
                        <li>
                            <a href="{{ url("/research_area/{$area->id}") }}">
                                {{ $area->name }}
                            </a>
                        </li>
                    @endforeach
                </ul>

            </div>
        </div>
    </section>
@endsection