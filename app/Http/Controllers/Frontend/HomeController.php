<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\AboutMe;
use App\Models\Experience;
use App\Models\Skill;

class HomeController extends Controller
{
    public function index()
    {
        $about_me = AboutMe::first();
        $skills = Skill::orderBy('id', 'DESC')->get();
        $experiences = Experience::orderBy('id', 'DESC')->get();
        return view('frontend.index', compact('about_me', 'skills', 'experiences'));
    }
}
