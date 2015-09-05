<header id="header">
    <div class="top-bar">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-xs-10">
                    <div class="top-number">
                        <p>
                            <i class="fa fa-phone-square"></i> +88 0921 51899 |
                            <i class="fa fa-fax"></i> +88 0921 51900
                        </p>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-2">
                    <div class="social">
                        <ul class="social-share">
                            <li><a target="_blank" href="https://www.facebook.com/InformationCommunicationTechnologymbstu"><i class="fa fa-facebook"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div><!--/.container-->
    </div><!--/.top-bar-->

    <nav class="navbar navbar-inverse" role="banner">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ asset('images/logo_large.png') }}" alt="logo" id="logo">
                    ICT, MBSTU
                </a>
            </div>

            <div class="collapse navbar-collapse navbar-right">
                <ul class="nav navbar-nav">
                    <li {{ ($active == 'home')?'class=active':'' }}><a href="{{ url('/') }}">Home</a></li>

                    <li class="dropdown {{ ($active == 'about_us')?'active':'' }}">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">About Us <i class="fa fa-angle-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">General Information</a></li>
                            <li><a href="#">Message of Head</a></li>
                            <li><a href="{{ url('/contact') }}">Contact Info</a></li>
                        </ul>
                    </li>

                    <li {{ ($active == 'faculty')?'class=active':'' }}><a href="{{ url('/faculty') }}">Faculty</a></li>

                    <li class="dropdown {{ ($active == 'research')?'active':'' }}">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Research <i class="fa fa-angle-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ url('/research_area') }}">Research Area</a></li>
                            <li><a href="{{ url('/journal') }}">Journal Publication</a></li>
                            <li><a href="{{ url('/conference') }}">Conference Paper</a></li>
                            <li><a href="{{ url('/research_group') }}">Research Group</a></li>
                        </ul>
                    </li>

                    <li {{ ($active == 'course')?'class=active':'' }}><a href="#">Courses</a></li>

                    <li {{ ($active == 'alumni')?'class=active':'' }}><a href="{{ url('/alumni') }}">Alumni</a></li>

                    <li {{ ($active == 'news')?'class=active':'' }}><a href="#">News</a></li>

                </ul>
            </div>
        </div><!--/.container-->
    </nav><!--/nav-->

</header><!--/header-->
