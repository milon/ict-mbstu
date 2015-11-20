@extends('frontend.layout.frontend')

@section('style')
    <link href="{{ asset('/front_panel/css/lity.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/front_panel/css/jquery.simplyscroll.css') }}" rel="stylesheet">
@endsection

@section('content')
    @include('frontend.layout.partials._slider')

    <div class="container">

        <div class="row">
            <div class="col-sm-4">
                <h2 class="heading">Recent News</h2>
                <hr>
                @if(count($newsList))
                    <ul class="nav nav-pills nav-stacked scroll">
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

                <h2 class="heading">Contact</h2>
                <hr>
                <p class="lead">
                    <i class="fa fa-phone-square"></i> +88 0921 55399 <br>
                    <i class="fa fa-fax"></i> +88 0921 55400 <br>
                    <i class="fa fa-envelope"></i> registrar@mbstu.ac.bd
                </p>
            </div>

            <div class="col-sm-8">
                <h2 class="heading">Welcome to Dept. of <br>Information and Communication Technology</h2>
                <hr>

                <p class="lead">
                    The Department of Information and Communication Technology (ICT) was established in Mawlana Bhashani Science and Technology University (MBSTU) by the approval of Bangladesh University Grand Commission (BUGC) under the Faculty of Computer Science and Engineering (CSE) on 28th January 2003. Initially the Department offers the degree of B.Sc (Engg.) in ICT and the formal inaugural of academic activity of the Department commissioned on 26th October 2003 with 02(two) teachers and 40 students in the session of 2003-2004. Till today, ICT Department has produced around 100 graduates who have established a good reputation in different IT sectors in home and abroad. In this session it started conducting classes for the 7th batch on 9th January 2010. Currently there are 250 students are studying in different semesters. The Department is located on 12,500 sq. ft. of space on the south side of the second floor of the New Academic Building, MBSTU.
                </p>

                <h2>Aims and Opjectives</h2>
                <p class="lead">
                    The Department of Information and Communication Technology (ICT) offers a 4-year bachelor degree on Bachelor of Science in Information and Communication Technology (ICT). To become a graduate in this field one student has to complete 160 credits. The main objective of this Department is to offer such program of study and related functions as will be directly linked to socio-economics empowerment of the people of the country. It also initiates, organizes and performs research on practical applications of ICT.
                </p>
                <p class="lead">
                    Department is leading to achieve the following objecttive:
                    <ul>
                        <li>To actively pursue advanced research in ICT in order to develop knowledge based products and services.</li>
                        <li>To develop ICT facilities in order to create an on-campus environment conducive to enthusiasm, innovation and enterprise and to nurture innovative ideas and incubate promising initiatives.</li>
                        <li>To produce manpower and expertise in ICT by carrying out training in diverse areas.</li>
                        <li>To provide consulting and advisory services to public and private organizations.</li>
                    </ul>
                </p>
            </div>
        </div>

    </div><!--/.container-->

    <div class="container gallery">
        <div class="row">
            <h2 class="heading">Image Gallery</h2>
            <hr>
        </div>

        <div class="row">
            <div class="col-sm-3">
                <a class="thumbnail" href="{{ url('/front_panel/images/gallery/06.jpg') }}" data-lity>
                    <img class="img-responsive" src="{{ url('/front_panel/images/gallery/06.jpg') }}" alt="" />
                </a>
            </div>
            <div class="col-sm-3">
                <a class="thumbnail" href="{{ url('/front_panel/images/gallery/02.jpg') }}" data-lity>
                    <img src="{{ url('/front_panel/images/gallery/02.jpg') }}" alt="" />
                </a>
            </div>
            <div class="col-sm-3">
                <a class="thumbnail" href="{{ url('/front_panel/images/gallery/07.jpg') }}" data-lity>
                    <img src="{{ url('/front_panel/images/gallery/07.jpg') }}" alt="" />
                </a>
            </div>
            <div class="col-sm-3">
                <a class="thumbnail" href="{{ url('/front_panel/images/gallery/08.jpg') }}" data-lity>
                    <img src="{{ url('/front_panel/images/gallery/08.jpg') }}" alt="" />
                </a>
            </div>
        </div>
    </div>

@endsection

@section('script')
    <script src="{{ asset('/front_panel/js/lity.min.js') }}"></script>
    <script src="{{ asset('/front_panel/js/jquery.simplyscroll.min.js') }}"></script>
    <script>
        (function(){
            // var div = $('.scroll');
            // var scroller = setInterval(function(){
            //     var pos = div.scrollTop();
            //     div.scrollTop(pos + 2);
            // }, 100);

            $('.scroll').simplyScroll({
                orientation: 'vertical',
                auto: true
            });
        })();
    </script>
@endsection
