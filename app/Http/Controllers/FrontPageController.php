<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontPageController extends Controller
{
    public function index()
    {
        return view('FrontPage');
    }

    public function about()
    {
        return view('about');
    }

    public function membership()
    {
        return view('membership.index');
    }
}
