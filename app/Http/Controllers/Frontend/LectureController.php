<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Requests;
use App\Models\Lecture;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LectureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $lectureList = Lecture::with('creator')->get();

        return view('frontend.lecture.list', ['lectureList' => $lectureList, 'active' => 'student']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $lecture = Lecture::with('creator')->find($id);

        return view('frontend.lecture.show', ['lecture' => $lecture, 'active' => 'student']);
    }

}
