@extends('frontend.layout.frontend')

@section('content')
    @include('frontend.lecture._title')

    <section class="faculty-detail">
        <div class="container">
            <div class="wow fadeInDown">
                <h1 class="text-center">
                    {{ $lecture->title }}
                </h1>
                <h2 class="text-center">By: {{ $lecture->creator->name }} <small class="lead">On: {{ $lecture->created_at->toDateString() }}</small></h2>

                <p class="lead m-top-20">
                    {!! html_entity_decode($lecture->description) !!}
                </p>

                @if(!empty($lecture->file_path))
                    <p class="m-top-20">
                        <a href="{{ url($lecture->file_path) }}" download>
                            <i class="fa fa-download"></i> Download Attachment
                        </a>
                    </p>
                @endif
            </div>
        </div>
    </section>
@endsection
