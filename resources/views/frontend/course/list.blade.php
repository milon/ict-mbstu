@extends('frontend.layout.frontend')

@section('content')
    @include('frontend.course._title')

    <section class="faculty-detail">
        <div class="container">
            <div class="wow fadeInDown">
                <h1 class="text-center">First Year First Semester</h1>

                <table class="table table-striped m-top-20">
                    @include('frontend.course._table_header')

                    <tbody>
                        @include('frontend.course._body', ['semester' => '1'])
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <section id="feature"  class="faculty-detail">
        <div class="container">
            <div class="wow fadeInDown">
                <h1 class="text-center">First Year Second Semester</h1>

                <table class="table table-striped m-top-20">
                    @include('frontend.course._table_header')

                    <tbody>
                        @include('frontend.course._body', ['semester' => '2'])
                    </tbody>
                </table>
            </div>
        </div><!--/.container-->
    </section>

    <section class="faculty-detail">
        <div class="container">
            <div class="wow fadeInDown">
                <h1 class="text-center">Second Year First Semester</h1>

                <table class="table table-striped m-top-20">
                    @include('frontend.course._table_header')

                    <tbody>
                        @include('frontend.course._body', ['semester' => '3'])
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <section id="feature"  class="faculty-detail">
        <div class="container">
            <div class="wow fadeInDown">
                <h1 class="text-center">Second Year Second Semester</h1>

                <table class="table table-striped m-top-20">
                    @include('frontend.course._table_header')

                    <tbody>
                        @include('frontend.course._body', ['semester' => '4'])
                    </tbody>
                </table>
            </div>
        </div><!--/.container-->
    </section>

    <section class="faculty-detail">
        <div class="container">
            <div class="wow fadeInDown">
                <h1 class="text-center">Third Year First Semester</h1>

                <table class="table table-striped m-top-20">
                    @include('frontend.course._table_header')

                    <tbody>
                        @include('frontend.course._body', ['semester' => '5'])
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <section id="feature"  class="faculty-detail">
        <div class="container">
            <div class="wow fadeInDown">
                <h1 class="text-center">Third Year Second Semester</h1>

                <table class="table table-striped m-top-20">
                    @include('frontend.course._table_header')

                    <tbody>
                        @include('frontend.course._body', ['semester' => '6'])
                    </tbody>
                </table>
            </div>
        </div><!--/.container-->
    </section>

    <section class="faculty-detail">
        <div class="container">
            <div class="wow fadeInDown">
                <h1 class="text-center">Fourth Year First Semester</h1>

                <table class="table table-striped m-top-20">
                    @include('frontend.course._table_header')

                    <tbody>
                        @include('frontend.course._body', ['semester' => '7'])
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <section id="feature"  class="faculty-detail">
        <div class="container">
            <div class="wow fadeInDown">
                <h1 class="text-center">Fourth Year Second Semester</h1>

                <table class="table table-striped m-top-20">
                    @include('frontend.course._table_header')

                    <tbody>
                        @include('frontend.course._body', ['semester' => '8'])
                    </tbody>
                </table>
            </div>
        </div><!--/.container-->
    </section>

    <section class="faculty-detail">
        <div class="container">
            <div class="wow fadeInDown">
                <h1 class="text-center">Masters First Semester</h1>

                <table class="table table-striped m-top-20">
                    @include('frontend.course._table_header')

                    <tbody>
                        @include('frontend.course._body', ['semester' => '9'])
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <section id="feature"  class="faculty-detail">
        <div class="container">
            <div class="wow fadeInDown">
                <h1 class="text-center">Masters Second Semester</h1>

                <table class="table table-striped m-top-20">
                    <thead>
                    <tr>
                        <th>Course Code</th>
                        <th>Course Title</th>
                        <th>Credit</th>
                    </tr>
                    </thead>

                    <tbody>
                        @include('frontend.course._body', ['semester' => '10'])
                    </tbody>
                </table>
            </div>
        </div><!--/.container-->
    </section>

    <section class="faculty-detail">
        <div class="container">
            <div class="wow fadeInDown">
                <h1 class="text-center">Masters Third Semester</h1>

                <table class="table table-striped m-top-20">
                    <thead>
                    <tr>
                        <th>Course Code</th>
                        <th>Course Title</th>
                        <th>Credit</th>
                    </tr>
                    </thead>

                    <tbody>
                        @include('frontend.course._body', ['semester' => '11'])
                    </tbody>
                </table>
            </div>
        </div>
    </section>

@endsection
