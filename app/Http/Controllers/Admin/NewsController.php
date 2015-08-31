<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\News;
use App\Http\Requests\NewsRequest;
use App\Helpers\HtmlEditor\HtmlEditor;
use App\Http\Controllers\Controller;
use Laracasts\Flash\Flash;

class NewsController extends Controller
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
        $newsList = News::latest()->get();

        return view('admin.news.list', compact('newsList'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.news.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(NewsRequest $request)
    {
        News::create([
            'title'        => $request->title,
            'published_at' => $request->published_at,
            'description'  => e($this->htmlEditor->parseHtml($request->description))
        ]);

        Flash::success('News created successfully.');
        return redirect('/admin/news');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $news = News::find($id);

        return view('admin.news.show', compact('news'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $news = News::find($id);

        return view('admin.news.edit', compact('news'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(NewsRequest $request, $id)
    {
        $news = News::find($id);
        $news->update([
            'title'        => $request->title,
            'published_at' => $request->published_at,
            'description'  => e($this->htmlEditor->parseHtml($request->description))
        ]);

        Flash::success('News updated successfully.');
        return redirect("/admin/news/$id");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $news = News::find($id);
        $news->delete();

        Flash::success('News deleted successfully.');
        return redirect('/admin/news');
    }
}