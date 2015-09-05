@extends('frontend.layout.frontend')

@section('content')
    <section id="feature" >
        <div class="container">
            <div class="center wow fadeInDown">
                <h2>Conference Paper</h2>
                <p class="lead">
                    A vast number of conferences have been attended by our faculties and students.
                </p>
            </div>
        </div><!--/.container-->
    </section>

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