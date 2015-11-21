<?php

namespace App\Http\Controllers\Admin;

use App\Models\News;
use Laracasts\Flash\Flash;
use Illuminate\Http\Request;
use App\Http\Requests\NewsRequest;
use App\Http\Controllers\Controller;
use App\Helpers\HtmlEditor\HtmlEditor;

class NewsController extends Controller
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
     * Display a listing of the News.
     *
     * @return Response
     */
    public function index()
    {
        $newsList = News::latest()->get();

        return view('admin.news.list', compact('newsList'));
    }

    /**
     * Show the form for creating a new News.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.news.create');
    }

    /**
     * Store a newly created News in storage.
     *
     * @param  NewsRequest  $request
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
     * Display the specified News.
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
     * Show the form for editing the specified News.
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
     * Update the specified News in storage.
     *
     * @param  NewsRequest  $request
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
     * Remove the specified News from storage.
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
