@extends('frontend.layout.frontend')

@section('content')
    <section id="feature" >
        <div class="container">
            <div class="center wow fadeInDown">
                <h2>Department of ICT Research Group</h2>
                <p class="lead">
                    The Department of Information and Communication Technology is one of the leading academic and research departments in Bangladesh. A combination of highly qualified faculty members, state of the art facilities and alumni have created a brand value in academia - in and outside of the country.
                </p>
            </div>
        </div><!--/.container-->
    </section>

    <section id="recent-works faculty-detail">
        <div class="container">
            <div class="wow fadeInDown">

                <h1>{{ $researchGroup->name }}</h1>
                <h2>Co Ordinator: {{ $researchGroup->coOrdinator->name }}</h2>

                <div class="m-top-20">
                    {!! html_entity_decode($researchGroup->description) !!}
                </div>
            </div>
        </div>
    </section>
@endsection