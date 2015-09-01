<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\HtmlEditor\HtmlEditor;
use App\Models\Education;
use Illuminate\Http\Request;
use App\Models\Faculty;
use App\Http\Requests\EducationRequest;
use App\Http\Controllers\Controller;
use Laracasts\Flash\Flash;

class EducationController extends Controller
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
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create($facultyId)
    {
        $facultyName = Faculty::find($facultyId)->name;

        return view('admin.faculty.education.create', compact('facultyId', 'facultyName'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store($facultyId, EducationRequest $request)
    {
        $faculty = Faculty::find($facultyId);
        $education = new Education([
            'name_of_degree' => $request->name_of_degree,
            'institute'      => $request->institute,
            'year'           => $request->year,
            'remarks'        => e($this->htmlEditor->parseHtml($request->remarks))
        ]);
        $faculty->education()->save($education);

        Flash::success('Faculty education added successfully');
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
        $education = Education::with('faculty')->find($id);

        return view('admin.faculty.education.show', compact('education'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($facultyId, $id)
    {
        $education = Education::with('faculty')->find($id);
        $facultyName = $education->faculty->name;

        return view('admin.faculty.education.edit', compact('education', 'facultyName', 'facultyId'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update($facultyId, EducationRequest $request, $id)
    {
        $education = Education::find($id);
        $education->update([
            'name_of_degree' => $request->name_of_degree,
            'institute'      => $request->institute,
            'year'           => $request->year,
            'remarks'        => e($this->htmlEditor->parseHtml($request->remarks))
        ]);

        Flash::success('Faculty education updated successfully');
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
        $education = Education::find($id);
        $education->delete();

        Flash::success('Faculty education deleted successfully');
        return redirect("/admin/faculty/$facultyId");
    }
}
