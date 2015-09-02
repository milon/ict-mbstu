<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\HtmlEditor\HtmlEditor;
use App\Models\Faculty;
use App\Models\Publication;
use App\Models\ResearchArea;
use Illuminate\Http\Request;
use App\Http\Requests\PublicationRequest;
use App\Http\Controllers\Controller;
use Laracasts\Flash\Flash;

class PublicationController extends Controller
{
    protected $htmlEditor;

    public function __construct(HtmlEditor $htmlEditor)
    {
        $this->htmlEditor = $htmlEditor;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create($facultyId)
    {
        $facultyName      = Faculty::find($facultyId)->name;
        $researchAreaList = ResearchArea::lists('name', 'id')->all();
        $typeList         = [
            'journal'    => 'Journal',
            'conference' => 'Conference'
        ];

        return view('admin.faculty.publication.create',
            compact(
                'facultyId',
                'facultyName',
                'researchAreaList',
                'typeList'
            )
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store($facultyId, PublicationRequest $request)
    {
        $faculty = Faculty::find($facultyId);
        $publication = new Publication([
            'name'        => $request->name,
            'link'        => $request->link,
            'year'        => $request->year,
            'type'        => $request->type,
            'description' => e($this->htmlEditor->parseHtml($request->description))
        ]);

        $faculty->publication()->save($publication);
        $publication->researchArea()->attach($request->research_area_id);

        Flash::success('Publication created successfully');
        return redirect("/admin/faculty/$facultyId");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($facultyId, $id)
    {
        $publication = Publication::with(['faculty', 'researchArea'])->find($id);

        return view('admin.faculty.publication.show', compact('publication'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($facultyId, $id)
    {
        $publication = Publication::with(['faculty', 'researchArea'])->find($id);
        $facultyName      = Faculty::find($facultyId)->name;
        $researchAreaList = ResearchArea::lists('name', 'id')->all();
        $typeList         = [
            'journal'    => 'Journal',
            'conference' => 'Conference'
        ];

        return view('admin.faculty.publication.edit',
            compact(
                'facultyId',
                'facultyName',
                'researchAreaList',
                'typeList',
                'publication'
            )
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update($facultyId, PublicationRequest $request, $id)
    {
        $publication = Publication::find($id);
        $publication->update([
            'name'        => $request->name,
            'link'        => $request->link,
            'year'        => $request->year,
            'type'        => $request->type,
            'description' => e($this->htmlEditor->parseHtml($request->description))
        ]);

        $publication->researchArea()->sync($request->research_area_id);

        Flash::success('Publication updated successfully');
        return redirect("/admin/faculty/$facultyId");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($facultyId, $id)
    {
        $publication = Publication::find($id);
        $publication->researchArea()->sync([]);
        $publication->delete();

        Flash::success('Publication created successfully');
        return redirect("/admin/faculty/$facultyId");
    }
}
