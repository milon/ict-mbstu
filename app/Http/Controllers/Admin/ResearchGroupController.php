<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\ResearchGroup;
use App\Models\Faculty;
use App\Http\Requests\ResearchGroupRequest;
use App\Http\Controllers\Controller;
use Laracasts\Flash\Flash;
use App\Helpers\HtmlEditor\HtmlEditor;

class ResearchGroupController extends Controller
{
    protected $htmlEditor;

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
        $researchGroupList = ResearchGroup::all();
        $facultyList = Faculty::lists('name', 'id')->all();

        return view('admin.research_group.list', compact('researchGroupList', 'facultyList'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $facultyList = Faculty::lists('name', 'id')->all();

        return view('admin.research_group.create', compact('facultyList'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(ResearchGroupRequest $request)
    {
        ResearchGroup::create([
            'name'         => $request->name,
            'co_ordinator' => $request->co_ordinator,
            'description'  => e($this->htmlEditor->parseHtml($request->description))
        ]);

        Flash::success('Research group created successfully.');
        return redirect('/admin/research_group');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $researchGroup = ResearchGroup::with('coOrdinator')->find($id);
        //return $researchGroup;

        return view('admin.research_group.show', compact('researchGroup'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $researchGroup = ResearchGroup::find($id);
        $facultyList = Faculty::lists('name', 'id')->all();

        return view('admin.research_group.edit', compact('researchGroup', 'facultyList'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(ResearchGroupRequest $request, $id)
    {
        $researchGroup = ResearchGroup::find($id);
        $researchGroup->update([
            'name' => $request->name,
            'co_ordinator' => $request->co_ordinator,
            'description' => e($this->htmlEditor->parseHtml($request->description))
        ]);

        Flash::success('Research group updated successfully.');
        return redirect('/admin/research_group');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $researchGroup = ResearchGroup::find($id);
        $researchGroup->delete();

        Flash::success('Research group deleted successfully.');
        return redirect('/admin/research_group');
    }
}
