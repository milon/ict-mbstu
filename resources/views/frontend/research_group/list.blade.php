@extends('frontend.layout.frontend')

@section('content')
    @include('frontend.research_group._title')

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
