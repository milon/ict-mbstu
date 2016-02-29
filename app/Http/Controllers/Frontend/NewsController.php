<?php

namespace App\Http\Controllers\Frontend;

use App\Models\News;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NewsController extends Controller
{
    /**
     * Display a listing of the News.
     *
     * @return Response
     */
    public function index()
    {
        $active = 'news';
        $newsList = News::published()->simplePaginate(10);

        return view('frontend.news.list', compact('active', 'newsList'));
    }

    /**
     * Display the specified News.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $active = 'news';
        $news = News::findOrFail($id);

        return view('frontend.news.show', compact('active', 'news'));
    }

}
