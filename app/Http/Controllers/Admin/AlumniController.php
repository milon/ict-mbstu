<?php

namespace App\Http\Controllers\Admin;

use App\Models\Alumni;
use Illuminate\Http\Request;
use App\Helpers\HtmlEditor\HtmlEditor;
use App\Http\Requests\AlumniRequest;
use App\Http\Controllers\Controller;
use Laracasts\Flash\Flash;

class AlumniController extends Controller
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
        $alumniList = Alumni::all();

        return view('admin.alumni.list', compact('alumniList'));
    }

    /**
     * Show the form for creating a new resource.
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
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(AlumniRequest $request)
    {
        //return $request->all();
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
     * Display the specified resource.
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
     * Show the form for editing the specified resource.
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
     * Update the specified resource in storage.
     *
     * @param  Request  $request
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
     * Remove the specified resource from storage.
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
