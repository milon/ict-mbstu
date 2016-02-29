@extends('frontend.layout.frontend')

@section('content')
    @include('frontend.news._title')

    <section id="blog" class="faculty-detail">
        <div class="container">
            <div class="wow fadeInDown">

                <div class="blog">

                    @if(count($newsList))

                        @foreach($newsList as $news)

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
                                            {!! str_limit(html_entity_decode($news->description), 350) !!}
                                        </p>
                                        <a class="btn btn-primary readmore" href="{{ url("news/{$news->id}") }}">Read More <i class="fa fa-angle-right"></i></a>
                                    </div>

                                </div>
                            </div>

                        @endforeach

                        <div class="paginate">
                            {!! $newsList->render() !!}
                        </div>

                    @else
                        <h1 class="text-center">
                            No News Published Yet
                        </h1>
                    @endif

                </div>

            </div>
        </div>
    </section>
@endsection
