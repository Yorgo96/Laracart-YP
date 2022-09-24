<?php

namespace App\Http\Controllers;

use App\Http\Controllers\PageController;

class PageController extends Controller
{
    public function home()
    {
        return \view('pages.home');
    }
    public function about()
    {
        return \view('pages.about');
    }

}
