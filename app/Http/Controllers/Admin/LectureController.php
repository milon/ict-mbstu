<?php

namespace App\Http\Controllers\Admin;

use App\Models\Lecture;
use Laracasts\Flash\Flash;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\LectureRequest;
use App\Helpers\HtmlEditor\HtmlEditor;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class LectureController extends Controller
{
    protected $htmlEditor;

    /**
     * constructor method
     *
     * @param HtmlEditor $htmlEditor [description]
     */
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
        $lectureList = Lecture::with('creator')->get();

        return view('admin.lecture.list', compact('lectureList'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.lecture.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(LectureRequest $request)
    {
        $fileName = null;

        //Attachment
        if($request->hasFile('attachment')){
            $fileName = $this->saveFile($request->file('attachment'));
        }

        //dd($fileName);

        $lecture = Lecture::create([
            'title'       => $request->title,
            'description' => e($this->htmlEditor->parseHtml($request->description)),
            'file_path'   => $fileName,
            'user_id'     => \Auth::id()
        ]);

        Flash::success('Lecture created successfully.');
        return redirect('/admin/lecture');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $lecture = Lecture::find($id);

        return view('admin.lecture.show', compact('lecture'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $lecture = Lecture::find($id);

        return view('admin.lecture.edit', compact('lecture'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(LectureRequest $request, $id)
    {
        $lecture = Lecture::find($id);
        $lecture->title = $request->title;
        $lecture->description = e($this->htmlEditor->parseHtml($request->description));

        //Attachment
        if($request->hasFile('attachment')){
            $oldFile = $lecture->file_path;

            $lecture->file_path = $this->saveFile($request->file('attachment'));

            @unlink(public_path($oldFile));
        }
        $lecture->save();

        Flash::success('Lecture updated successfully.');
        return redirect('/admin/lecture');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $lecture = Lecture::find($id);
        $lecture->delete();

        Flash::success('Lecture deleted successfully.');
        return redirect('/admin/lecture');
    }

    private function saveFile(UploadedFile $file)
    {
        $fileName = 'lecture_'.\Auth::id().'_'.time().'.'.$file->getClientOriginalExtension();

        $file->move(public_path('uploads/lecture/'), $fileName);

        return "uploads/lecture/$fileName";
    }

}
