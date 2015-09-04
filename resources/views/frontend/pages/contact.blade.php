@extends('frontend.layout.frontend')

@section('content')
    <section id="contact-info">
        <div class="center">
            <h2>How to Reach Us?</h2>
        </div>
        <div class="gmap-area">
            <div class="container">
                <div class="row">
                    <div class="col-sm-5 text-center">
                        <div class="gmap" id="googleMap">
                            <iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;ie=UTF8&amp;ll=24.235337,89.891748&amp;spn=0.001515,0.002452&amp;t=m&amp;z=16&amp;iwloc=A&amp;output=embed"></iframe>
                        </div>
                    </div>

                    <div class="col-sm-7 map-content">
                        <ul class="row">
                            <li class="col-sm-12">
                                <address>
                                    <h5>Campus</h5>
                                    <p>
                                        Mawlana Bhashani Science and Technology University, <br>
                                        Santosh, Tangail - 1902.
                                    </p>
                                </address>

                                <address>
                                    <h5>Dhaka Liaison Office</h5>
                                    <p>
                                        Subasto Novonil, <br>
                                        Flat No. 1-A(1st floor), <br>
                                        House No. 36, Road No. 14/A, <br>
                                        Dhanmondi, Dhaka-1209. <br>
                                        (Opposit of Bangladesh Medical College)
                                    </p>
                                </address>

                                <address>
                                    <h5>Contact</h5>
                                    <p>
                                        Phone: +88 0921 55399 <br>
                                        Fax: +88 0921 55400 <br>
                                        E-Mail: registrar@mbstu.ac.bd
                                    </p>
                                </address>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>  <!--/gmap_area -->

    <script src="http://maps.googleapis.com/maps/api/js"></script>
    <script>
        var myCenter=new google.maps.LatLng(24.235337, 89.891748);

        function initialize()
        {
            var mapProp = {
                center:myCenter,
                zoom:16,
                mapTypeId:google.maps.MapTypeId.ROADMAP
            };

            var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);

            var marker=new google.maps.Marker({
                position:myCenter
            });

            marker.setMap(map);

            google.maps.event.addDomListener(window, 'load', initialize);
        }
    </script>
@endsection