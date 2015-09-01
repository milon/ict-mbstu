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
        $facultyList = Faculty::all();

        return view('admin.faculty.list', compact('facultyList'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.faculty.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(FacultyRequest $request)
    {
        $faculty = Faculty::create([
            'name'        => $request->name,
            'designation' => $request->designation,
            'email'       => $request->email,
            'phone'       => $request->phone,
            'website'     => $request->website,
            'address'     => $request->address,
            'bio'         => e($this->htmlEditor->parseHtml($request->bio))
        ]);

        //Profile Picture
        if($request->hasFile('avatar')){
            $this->saveProfileImage($request->file('avatar'), $faculty->id);
        }

        Flash::success('Faculty created successfully.');
        return redirect('/admin/faculty');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $faculty = Faculty::find($id);

        return view('admin.faculty.show', compact('faculty'));
    }

    /**
     * Show the form for editing the specified resource.
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
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(FacultyRequest $request, $id)
    {
        $faculty = Faculty::find($id);
        $faculty->update([
            'name'        => $request->name,
            'designation' => $request->designation,
            'email'       => $request->email,
            'phone'       => $request->phone,
            'website'     => $request->website,
            'address'     => $request->address,
            'bio'         => e($this->htmlEditor->parseHtml($request->bio))
        ]);

        //Profile Picture
        if($request->hasFile('avatar')){
            $this->saveProfileImage($request->file('avatar'), $faculty->id);
        }

        Flash::success('Faculty dpdated successfully.');
        return redirect('/admin/faculty');     
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $faculty = Faculty::find($id);
        //$faculty->delete();
        
        if(file_exists(public_path("uploads/faculty/faculty_{$faculty->id}.jpg"))){
            @unlink(public_path("uploads/faculty/faculty_{$faculty->id}.jpg"));
        }
        
        Flash::success('Faculty deleted successfully.');
        return redirect('/admin/faculty');
    }

    /**
     * Save avatar of faculty
     * @param  UploadedFile $file   
     * @param  int       $userId 
     * @return void
     */
    private function saveProfileImage(UploadedFile $file, $facultyId)
    {
        $image = Image::make($file);
        $image->resize(240, 300);
        $image->save(public_path("uploads/faculty/faculty_$facultyId.jpg"));
    }

}
