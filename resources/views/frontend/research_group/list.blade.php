@extends('frontend.layout.frontend')

@section('content')
    <section id="feature" >
        <div class="container">
            <div class="center wow fadeInDown">
                <h2>Department of ICT Research Group</h2>
                <p class="lead">
                    The Department of Information and Communication Technology is one of the leading academic and research departments in Bangladesh. A combination of highly qualified faculty members, state of the art facilities and alumni have created a brand value in academia - in and outside of the country.
                </p>
            </div>
        </div><!--/.container-->
    </section>

    <section id="recent-works faculty-detail">
        <div class="container">
            <div class="wow fadeInDown">

                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Co Ordinator</th>
                    </tr>
                    </thead>

                    <tbody>
                    @if(count($researchGroupList))
                        @foreach($researchGroupList as $group)
                            <tr>
                                <td><a href="{{ url("/research_group/$group->id") }}">{{ $group->name }}</a></td>
                                <td><a href="{{ url("/faculty/{$group->coOrdinator->id}") }}">{{ $group->coOrdinator->name }}</a></td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="2">
                                No Research Group Found
                            </td>
                        </tr>
                    @endif
                    </tbody>
                </table>

            </div>
        </div>
    </section>
@endsection