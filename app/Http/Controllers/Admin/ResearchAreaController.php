<?php

namespace App\Http\Controllers\Admin;

use Laracasts\Flash\Flash;
use App\Models\ResearchArea;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ResearchAreaRequest;

class ResearchAreaController extends Controller
{
    /**
     * Display a listing of the ResearchArea.
     *
     * @return Response
     */
    public function index()
    {
        $researchAreaList = ResearchArea::all();

        return view('admin.research_area.list', compact('researchAreaList'));
    }

    /**
     * Show the form for creating a new ResearchArea.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.research_area.create');
    }

    /**
     * Store a newly created ResearchArea in storage.
     *
     * @param  ResearchAreaRequest  $request
     * @return Response
     */
    public function store(ResearchAreaRequest $request)
    {
        ResearchArea::create([
            'name' => $request->name
        ]);

        Flash::success('Research area created successfully.');
        return redirect('/admin/research_area');
    }

    /**
     * Show the form for editing the specified ResearchArea.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $researchArea = ResearchArea::find($id);

        return view('admin.research_area.edit', compact('researchArea'));
    }

    /**
     * Update the specified resource in ResearchArea.
     *
     * @param  ResearchAreaRequest  $request
     * @param  int  $id
     * @return Response
     */
    public function update(ResearchAreaRequest $request, $id)
    {
        $researchArea = ResearchArea::find($id);
        $researchArea->update([
            'name' => $request->name
        ]);

        Flash::success('Research area updated successfully.');
        return redirect('/admin/research_area');
    }

    /**
     * Remove the specified resource from ResearchArea.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $researchArea = ResearchArea::find($id);
        $researchArea->delete();

        Flash::success('Research area deleted successfully.');
        return redirect('/admin/research_area');
    }
}
