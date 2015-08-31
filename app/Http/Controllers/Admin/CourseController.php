<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Helpers\HtmlEditor\HtmlEditor;
use App\Http\Requests\CourseRequest;
use App\Http\Controllers\Controller;
use App\Models\Course;
use Laracasts\Flash\Flash;

class CourseController extends Controller
{
    protected $htmlEditor;

    protected $semesterList = [
        '' => 'Select semester',
        1  => '1st year 1st semester',
        2  => '1st year 2nd semester',
        3  => '2nd year 1st semester',
        4  => '2nd year 2nd semester',
        5  => '3rd year 1st semester',
        6  => '3rd year 2nd semester',
        7  => '4th year 1st semester',
        8  => '4th year 2nd semester',
        9  => 'Masters 1st semester',
        10 => 'Masters 2nd semester',
        11 => 'Masters 3rd semester',
    ];

    public function __construct(HtmlEditor $htmlEditor)
    {
        $this->htmlEditor = $htmlEditor;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $courseList = Course::all();
        $semesterList = $this->semesterList;

        return view('admin.course.list', compact('courseList', 'semesterList'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $semesterList = $this->semesterList;

        return view('admin.course.create', compact('semesterList'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(CourseRequest $request)
    {
        Course::create([
            'code'        => $request->code,
            'name'        => $request->name,
            'semester'    => $request->semester,
            'credit'      => $request-> credit,
            'description' => e($this->htmlEditor->parseHtml($request->description))
        ]);

        Flash::success('Course created successfully.');
        return redirect('/admin/course');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $course = Course::find($id);
        $semesterList = $this->semesterList;

        return view('admin.course.show', compact('course', 'semesterList'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $course = Course::find($id);
        $semesterList = $this->semesterList;

        return view('admin.course.edit', compact('course', 'semesterList'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(CourseRequest $request, $id)
    {
        $course = Course::find($id);
        $course->update([
            'code'        => $request->code,
            'name'        => $request->name,
            'semester'    => $request->semester,
            'credit'      => $request-> credit,
            'description' => e($this->htmlEditor->parseHtml($request->description))
        ]);

        Flash::success('Course updated successfully.');
        return redirect("/admin/course/$id");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $course = Course::find($id);
        $course->delete();

        Flash::success('Course deleted successfully.');
        return redirect('/admin/course');
    }

}
