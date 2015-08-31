<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\ResearchArea;
use App\Http\Requests\ResearchAreaRequest;
use App\Http\Controllers\Controller;
use Laracasts\Flash\Flash;

class ResearchAreaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $researchAreaList = ResearchArea::all();

        return view('admin.research_area.list', compact('researchAreaList'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.research_area.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
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
     * Show the form for editing the specified resource.
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
     * Update the specified resource in storage.
     *
     * @param  Request  $request
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
     * Remove the specified resource from storage.
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
