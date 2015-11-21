@extends('frontend.layout.frontend')

@section('style')
    <link href="{{ asset('/front_panel/css/lity.min.css') }}" rel="stylesheet">
@endsection

@section('content')
    <section id="feature" >
        <div class="container">
            <div class="center wow fadeInDown">
                <h2>Department of ICT Image Gallery</h2>
            </div>
        </div><!--/.container-->
    </section>

    <section id="blog" class="faculty-detail">
        <div class="container">
            <div class="wow fadeInDown gallery">

                @for($i=0, $num=1; $i<5; $i++)
                    <div class="row">
                        @for($j=0; $j<4; $j++, $num++)
                            <div class="col-sm-3">
                                <a class="thumbnail" href="{{ url(sprintf("/front_panel/images/gallery/%02d.jpg", $num)) }}" data-lity>
                                    <img class="img-responsive" src="{{ url(sprintf("/front_panel/images/gallery/thumbnail/t_%02d.jpg", $num)) }}" alt="" />
                                </a>
                            </div>
                        @endfor
                    </div>
                @endfor

            </div>
        </div>
    </section>
@endsection

@section('script')
    <script src="{{ asset('/front_panel/js/lity.min.js') }}"></script>
@endsection
