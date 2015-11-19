<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Faculty;
use App\Http\Requests\FacultyRequest;
use App\Http\Controllers\Controller;
use Laracasts\Flash\Flash;
use App\Helpers\HtmlEditor\HtmlEditor;
use Intervention\Image\Facades\Image;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class FacultyController extends Controller
{
    protected $htmlEditor;

    /**
     * constructor method
     *
     * @param HtmlEditor $htmlEditor
     */
    public function __construct(HtmlEditor $htmlEditor)
    {
        $this->htmlEditor = $htmlEditor;
    }

    /**
     * Display a listing of the Faculty.
     *
     * @return Response
     */
    public function index()
    {
        $facultyList = Faculty::all();

        return view('admin.faculty.list', compact('facultyList'));
    }

    /**
     * Show the form for creating a new Faculty.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.faculty.create');
    }

    /**
     * Store a newly created Faculty in storage.
     *
     * @param  FacultyRequest  $request
     * @return Response
     */
    public function store(FacultyRequest $request)
    {
        $faculty = Faculty::create([
            'name'            => $request->name,
            'designation'     => $request->designation,
            'email'           => $request->email,
            'phone'           => $request->phone,
            'website'         => $request->website,
            'address'         => $request->address,
            'education_leave' => $request->has('education_leave')?1:0,
            'bio'             => e($this->htmlEditor->parseHtml($request->bio))
        ]);

        //Profile Picture
        if($request->hasFile('avatar')){
            $this->saveProfileImage($request->file('avatar'), $faculty->id);
        }

        Flash::success('Faculty created successfully.');
        return redirect('/admin/faculty');
    }

    /**
     * Display the specified Faculty.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $faculty = Faculty::with('education')->find($id);

        return view('admin.faculty.show', compact('faculty'));
    }

    /**
     * Show the form for editing the specified Faculty.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $faculty = Faculty::find($id);

        return view('admin.faculty.edit', compact('faculty'));
    }

    /**
     * Update the specified resource in Faculty.
     *
     * @param  FacultyRequest  $request
     * @param  int  $id
     * @return Response
     */
    public function update(FacultyRequest $request, $id)
    {
        $faculty = Faculty::find($id);
        $faculty->update([
            'name'            => $request->name,
            'designation'     => $request->designation,
            'email'           => $request->email,
            'phone'           => $request->phone,
            'website'         => $request->website,
            'address'         => $request->address,
            'education_leave' => $request->has('education_leave')?1:0,
            'bio'             => e($this->htmlEditor->parseHtml($request->bio))
        ]);

        //Profile Picture
        if($request->hasFile('avatar')){
            $this->saveProfileImage($request->file('avatar'), $faculty->id);
        }

        Flash::success('Faculty dpdated successfully.');
        return redirect('/admin/faculty');
    }

    /**
     * Remove the specified Faculty from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $faculty = Faculty::find($id);

        //delete education
        $faculty->education()->delete();

        //delete publication
        foreach($faculty->publication as $publication){
            $publication->researchArea()->sync([]);
        }
        $faculty->publication()->delete();

        //delete faculty
        $faculty->delete();

        Flash::success('Faculty deleted successfully.');
        return redirect('/admin/faculty');
    }

    /**
     * Save avatar of faculty
     *
     * @param  UploadedFile $file
     * @param  int  $userId
     * @return void
     */
    private function saveProfileImage(UploadedFile $file, $facultyId)
    {
        $image = Image::make($file);
        $image->resize(240, 300);
        $image->save(public_path("uploads/faculty/faculty_$facultyId.jpg"));
    }

}
