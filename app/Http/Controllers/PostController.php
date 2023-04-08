<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index2()
    {
        return view('index2');
    }


    public function home()
    {
        return view('frontend.index');
    }

    public function information()
    {
        return view('frontend.information');
    }
}
