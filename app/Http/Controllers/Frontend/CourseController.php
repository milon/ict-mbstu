<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Course;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $courseList = Course::orderBy('code', 'asc')->get();
        $active = 'course';

        return view('frontend.course.list', compact('active', 'courseList'));
    }

    /**
     * Display the specified resource.
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
