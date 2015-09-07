<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;

use App\Http\Requests;
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
        return view('frontend.pages.home', ['active' => 'home']);
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
}
