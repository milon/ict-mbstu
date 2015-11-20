<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\News;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
	/**
	 * Show home page
	 *
	 * @return Response
	 */
    public function home()
    {
        $newsList = News::published()->take(7)->get();

        return view('frontend.pages.home', ['active' => 'home', 'newsList' => $newsList]);
    }

    /**
     * Show contact page
     *
     * @return Response
     */
    public function contact()
    {
        return view('frontend.pages.contact', ['active' => 'about_us']);
    }

    /**
     *
     */
    public function bsc()
    {
        return view('frontend.pages.bsc', ['active' => 'student']);
    }


    public function msc()
    {
        return view('frontend.pages.msc', ['active' => 'student']);
    }


    public function admission()
    {
        return view('frontend.pages.admission', ['active' => 'student']);
    }

    public function general()
    {
        return view('frontend.pages.general', ['active' => 'about_us']);
    }

    public function gallery()
    {
        return view('frontend.pages.gallery', ['active' => 'about_us']);
    }

}
