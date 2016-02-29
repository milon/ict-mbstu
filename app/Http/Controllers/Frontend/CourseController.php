<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Requests;
use App\Models\Course;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CourseController extends Controller
{
    /**
     * Display a listing of the Course.
     *
     * @return Response
     */
    public function index()
    {
        $semesterList = [
            'First year First Semester',
            'First year Second Semester',
            'Second year First Semester',
            'Second year Second Semester',
            'Third year First Semester',
            'Third year Second Semester',
            'Fourth year First Semester',
            'Fourth year Second Semester',
            'Masters year First Semester',
            'Masters year Second Semester',
            'Masters year Third Semester'
        ];
        $courseList = Course::orderBy('code', 'asc')->get();
        $active = 'course';

        return view('frontend.course.list', compact('active', 'courseList', 'semesterList'));
    }

    /**
     * Display the specified Course.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $course = Course::findOrFail($id);
        $active = 'course';

        return view('frontend.course.show', compact('active', 'course'));
    }

}
