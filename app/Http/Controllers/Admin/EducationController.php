<?php

namespace App\Http\Controllers\Admin;

use App\Models\Faculty;
use App\Models\Education;
use Laracasts\Flash\Flash;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Helpers\HtmlEditor\HtmlEditor;
use App\Http\Requests\EducationRequest;

class EducationController extends Controller
{
    protected $htmlEditor;

    /**
     * constructor method
     * @param HtmlEditor $htmlEditor
     */
    public function __construct(HtmlEditor $htmlEditor)
    {
        $this->htmlEditor = $htmlEditor;
    }

    /**
     * Show the form for creating a new Education.
     *
     * @param  int      $facultyId
     * @return Response
     */
    public function create($facultyId)
    {
        $facultyName = Faculty::find($facultyId)->name;

        return view('admin.faculty.education.create', compact('facultyId', 'facultyName'));
    }

    /**
     * Store a newly created Education in storage.
     *
     * @param  int      $facultyId
     * @param  EducationRequest  $request
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
     * Display the specified Education.
     *
     * @param  int  $facultyId
     * @param  int  $id
     * @return Response
     */
    public function show($facultyId, $id)
    {
        $education = Education::with('faculty')->find($id);

        return view('admin.faculty.education.show', compact('education'));
    }

    /**
     * Show the form for editing the specified Education.
     *
     * @param  int  $facultyId
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
     * @param  int $facultyId
     * @param  EducationRequest  $request
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
     * @param  int $facultyId
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
