<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class allPage extends Controller
{
    public function homePage()
    {
        return view('home');
    }

    public function resumePage()
    {
        return view('resume');
    }

    public function projectPage()
    {
        return view('projects');
    }

    public function contactPage()
    {
        return view('contact');
    }
}
