<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Publication;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class JournalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $active = 'research';
        $journalList = Publication::journal()->latest('year')->get();

        return view('frontend.journal.list', compact('active', 'journalList'));
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
        $journal = Publication::with(['researchArea', 'faculty'])->find($id);

        return view('frontend.journal.show', compact('active', 'journal'));
    }

}
