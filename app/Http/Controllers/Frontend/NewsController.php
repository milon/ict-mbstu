<?php

namespace App\Http\Controllers\Frontend;

use App\Models\News;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
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
     * Display the specified resource.
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
