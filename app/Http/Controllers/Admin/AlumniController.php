<?php

namespace App\Http\Controllers\Admin;

use App\Models\Alumni;
use Laracasts\Flash\Flash;
use Illuminate\Http\Request;
use App\Http\Requests\AlumniRequest;
use App\Http\Controllers\Controller;
use App\Helpers\HtmlEditor\HtmlEditor;

class AlumniController extends Controller
{
    protected $htmlEditor;

    /**
     * constructor
     *
     * @param HtmlEditor $htmlEditor
     */
    public function __construct(HtmlEditor $htmlEditor)
    {
        $this->htmlEditor = $htmlEditor;
    }

    /**
     * Display a listing of the Alumni.
     *
     * @return Response
     */
    public function index()
    {
        $alumniList = Alumni::all();

        return view('admin.alumni.list', compact('alumniList'));
    }

    /**
     * Show the form for creating a new Alumni.
     *
     * @return Response
     */
    public function create()
    {
        $degreeList = [
            'BSc Engineering' => 'BSc Engineering',
            'MSc Engineering' => 'MSc Engineering'
        ];

        return view('admin.alumni.create', compact('degreeList'));
    }

    /**
     * Store a newly created Alumni in storage.
     *
     * @param  AlumniRequest  $request
     * @return Response
     */
    public function store(AlumniRequest $request)
    {
        Alumni::create([
            'name'         => $request->name,
            'student_id'   => $request->student_id,
            'degree'       => $request->degree,
            'passing_year' => $request->passing_year,
            'email'        => $request->email,
            'phone'        => $request->phone,
            'website'      => $request->website,
            'description'  => e($this->htmlEditor->parseHtml($request->description))
        ]);

        Flash::success('Alumni added successfully.');
        return redirect('/admin/alumni');
    }

    /**
     * Display the specified Alumni.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $alumni = Alumni::find($id);

        return view('admin.alumni.show', compact('alumni'));
    }

    /**
     * Show the form for editing the specified Alumni.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $alumni = Alumni::find($id);
        $degreeList = [
            'BSc Engineering' => 'BSc Engineering',
            'MSc Engineering' => 'MSc Engineering'
        ];

        return view('admin.alumni.edit', compact('alumni', 'degreeList'));
    }

    /**
     * Update the specified Alumni in storage.
     *
     * @param  AlumniRequest  $request
     * @param  int  $id
     * @return Response
     */
    public function update(AlumniRequest $request, $id)
    {
        $alumni = Alumni::find($id);
        $alumni->update([
            'name'         => $request->name,
            'student_id'   => $request->student_id,
            'degree'       => $request->degree,
            'passing_year' => $request->passing_year,
            'email'        => $request->email,
            'phone'        => $request->phone,
            'website'      => $request->website,
            'description'  => e($this->htmlEditor->parseHtml($request->description))
        ]);

        Flash::success('Alumni updated successfully');
        return redirect("/admin/alumni/{$alumni->id}");
    }

    /**
     * Remove the specified Alumni from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $alumni = Alumni::find($id);
        $alumni->delete();

        Flash::success('Alumni deleted successfully');
        return redirect('/admin/alumni');
    }
}
