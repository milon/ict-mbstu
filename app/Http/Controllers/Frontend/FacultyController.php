<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Requests;
use App\Models\Faculty;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FacultyController extends Controller
{
    /**
     * Display a listing of the Faculty.
     *
     * @return Response
     */
    public function index()
    {
        $active = 'faculty';
        $facultyList = Faculty::simplePaginate(12);

        return view('frontend.faculty.list', compact('active', 'facultyList'));
    }

    /**
     * Display the specified Faculty.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $active = 'faculty';
        $faculty = Faculty::with(['journal', 'conference', 'education'])->findOrFail($id);

        return view('frontend.faculty.show', compact('active', 'faculty'));
    }

}
