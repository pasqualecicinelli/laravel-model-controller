<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        $title = "Laravel Model Controller";
        return view('home', compact('title'));
    }

}