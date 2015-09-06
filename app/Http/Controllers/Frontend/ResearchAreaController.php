<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Publication;
use App\Models\ResearchArea;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ResearchAreaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $active = 'research';
        $researchAreaList = ResearchArea::all();

        return view('frontend.research_area.list', compact('active', 'researchAreaList'));
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
        $researchArea = ResearchArea::with('publication')->findOrFail($id);

        return view('frontend.research_area.show', compact('active', 'researchArea'));
    }

}
