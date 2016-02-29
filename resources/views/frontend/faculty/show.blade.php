@extends('frontend.layout.frontend')

@section('content')
    @include('frontend.faculty._title')

    <section id="recent-works faculty-detail">
        <div class="container">
            <div class="wow fadeInDown">

                <div class="row">
                    <div class="col-sm-3">
                        <img src="{{ $faculty->avatar }}" alt="Profile Photo" class="img-thumbnail">
                    </div>

                    <div class="col-sm-9 grey">
                        <h1>{{ $faculty->name }}</h1>
                        <h2>{{ $faculty->designation }}</h2>
                        <br>
                        <h3><i class="fa fa-envelope-o"></i> <strong>Email:</strong> {{ $faculty->email }}</h3>
                        <h3><i class="fa fa-phone"></i> <strong>Phone:</strong> {{ $faculty->phone }}</h3>
                        <h3><i class="fa fa-globe"></i> <strong>Website:</strong> {{ $faculty->website }}</h3>
                        <h3><i class="fa fa-map-marker"></i> <strong>Address:</strong> {{ $faculty->address }}</h3>
                    </div>
                </div>

                <div class="row m-top-10">
                    <div class="col-sm-12">
                        {!! html_entity_decode($faculty->bio) !!}

                        @if(count($faculty->education))
                            <h1>Educations</h1>
                            @foreach($faculty->education as $education)
                                <h2>{{ $education->name_of_degree }}</h2>
                                <h3>{{ $education->institute }} ({{ $education->year }})</h3>
                                <p class="lead">
                                    {!! html_entity_decode($education->remarks) !!}
                                </p>
                            @endforeach
                        @endif

                        @if(count($faculty->journal))
                            <h1>Journal Publication</h1>
                            @foreach($faculty->journal as $journal)
                                <h2><a href="{{ $journal->link }}">{{ $journal->name }}</a></h2>
                                <h3>Publication Year: {{ $journal->year }}</h3>
                                <p class="lead">
                                    {!! html_entity_decode($journal->description) !!}
                                </p>
                            @endforeach
                        @endif

                        @if(count($faculty->conference))
                            <h1>Conference Paper</h1>
                            @foreach($faculty->conference as $conference)
                                <h2><a href="{{ $conference->link }}">{{ $conference->name }}</a></h2>
                                <h3>Conference Year: {{ $conference->year }}</h3>
                                <p class="lead">
                                    {!! html_entity_decode($conference->description) !!}
                                </p>
                            @endforeach
                        @endif
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
