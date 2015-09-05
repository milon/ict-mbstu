@extends('frontend.layout.frontend')

@section('content')
    <section id="feature" >
        <div class="container">
            <div class="center wow fadeInDown">
                <h2>Department of ICT News</h2>
            </div>
        </div><!--/.container-->
    </section>

    <section id="blog" class="faculty-detail">
        <div class="container">
            <div class="wow fadeInDown">

                <div class="blog">

                    <div class="blog-item">
                        <div class="row">

                            <div class="col-sm-2 text-center">
                                <div class="entry-meta">
                                    <span id="publish_date">{{ $news->published_at->toFormattedDateString() }}</span>
                                    <span>{{ $news->published_at->format('l') }}</span>
                                </div>
                            </div>
                            <div class="col-sm-10 blog-content">
                                <h2><a href="{{ url("/news/{$news->id}") }}">{{ $news->title }}</a></h2>
                                <p class="lead">
                                    {!! html_entity_decode($news->description) !!}
                                </p>
                            </div>

                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>
@endsection