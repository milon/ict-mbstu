<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Publication;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ConferenceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $active = 'research';
        $conferenceList = Publication::conference()->latest('year')->get();

        return view('frontend.conference.list', compact('active', 'conferenceList'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $active = 'research';
        $conference = Publication::with(['researchArea', 'faculty'])->where('type', 'conference')->findOrFail($id);

        return view('frontend.conference.show', compact('active', 'conference'));
    }

}
