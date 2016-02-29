@extends('frontend.layout.frontend')

@section('content')
    @include('frontend.research_group._title')

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
