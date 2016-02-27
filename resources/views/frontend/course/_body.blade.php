@if(count($courseList->where('semester', $semester)))
    @foreach($courseList->where('semester', $semester) as $course)
        <tr>
            <td>
                <a href="{{ url("/course/{$course->id}") }}">
                    {{ $course->code }}
                </a>
            </td>
            <td>{{ $course->name }}</td>
            <td>{{ $course->credit }}</td>
        </tr>
    @endforeach
@else
    <tr>
        <td colspan="3">No Course Available Yet</td>
    </tr>
@endif
