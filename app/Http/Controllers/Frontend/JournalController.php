<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Requests;
use App\Models\Publication;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class JournalController extends Controller
{
    /**
     * Display a listing of the Journal.
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
     * Display the specified Journal.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $active = 'research';
        $journal = Publication::with(['researchArea', 'faculty'])->where('type', 'journal')->findOrFail($id);

        return view('frontend.journal.show', compact('active', 'journal'));
    }

}
