<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\AboutMe;

class HomeController extends Controller
{
    public function index()
    {
        $about_me = AboutMe::first();
        return view('frontend.index',compact('about_me'));
    }
}
