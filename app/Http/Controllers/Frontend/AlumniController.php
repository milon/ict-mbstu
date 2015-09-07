<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Alumni;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AlumniController extends Controller
{

    /**
     * Show Alumni listing
     * 
     * @return Response
     */
    public function index()
    {
        $alumniList = Alumni::all();
        $active = 'alumni';

        return view('frontend.alumni.list', compact('alumniList', 'active'));
    }

    /**
     * Show specific Alumni Details
     * 
     * @param  int $id 
     * @return Response
     */
    public function show($id)
    {
        $alumni = Alumni::findOrFail($id);
        $active = 'alumni';

        return view('frontend.alumni.show', compact('alumni', 'active'));
    }

}
