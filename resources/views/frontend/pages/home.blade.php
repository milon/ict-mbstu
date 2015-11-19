@extends('frontend.layout.frontend')

@section('style')
    <link href="{{ asset('/front_panel/css/lity.min.css') }}" rel="stylesheet">
@endsection

@section('content')
    @include('frontend.layout.partials._slider')

    <div class="container">

        <div class="row">
            <div class="col-sm-4">
                <h2>Recent News</h2>
                @if(count($newsList))
                    <ul class="nav nav-pills nav-stacked">
                        @foreach($newsList as $news)
                            <li class="news-li">
                                <a href="{{ url("/news/{$news->id}") }}">
                                    {{ $news->title }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                @else
                    <h4>No news available</h4>
                @endif
            </div>

            <div class="col-sm-8">
                <p>
                    My name is Milon
                </p>
            </div>
        </div>

    </div><!--/.container-->

    <div class="container gallery">
        <div class="row">
            <div class="col-sm-3">
                <a class="thumbnail" href="{{ url('/front_panel/images/gallery/01.jpg') }}" data-lity>
                    <img class="img-responsive" src="{{ url('/front_panel/images/gallery/01.jpg') }}" alt="" />
                </a>
            </div>
            <div class="col-sm-3">
                <a class="thumbnail" href="{{ url('/front_panel/images/gallery/02.jpg') }}" data-lity>
                    <img src="{{ url('/front_panel/images/gallery/02.jpg') }}" alt="" />
                </a>
            </div>
            <div class="col-sm-3">
                <a class="thumbnail" href="{{ url('/front_panel/images/gallery/03.jpg') }}" data-lity>
                    <img src="{{ url('/front_panel/images/gallery/03.jpg') }}" alt="" />
                </a>
            </div>
            <div class="col-sm-3">
                <a class="thumbnail" href="{{ url('/front_panel/images/gallery/04.jpg') }}" data-lity>
                    <img src="{{ url('/front_panel/images/gallery/04.jpg') }}" alt="" />
                </a>
            </div>
        </div>
    </div>

@endsection

@section('script')
    <script src="{{ asset('/front_panel/js/lity.min.js') }}"></script>
@endsection
