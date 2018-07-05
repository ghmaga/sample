<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPagesController extends Controller
{
    //Home
    public function home()
    {
        return view('static_pages/home');
    }
    //Help
    public function help()
    {
        return view('static_pages/help');
    }

    //About
    public function about()
    {
        return view('static_pages/about');
    }
}
