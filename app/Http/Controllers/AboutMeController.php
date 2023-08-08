<?php

namespace App\Http\Controllers;

use App\Models\AboutMe;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AboutMeController extends Controller
{
    function edit(): View
    {
        $about_me = AboutMe::first();
        return view('backend.about_me.edit', compact('about_me'));
    }
    function update(Request $request, $id)
    {
        $request->validate([
            'heading'       => 'required|string',
            'cv'       => 'mimes:pdf|max:10000',
            'experience' => 'required|numeric',
            'completed_project' => 'required|numeric',
            'companies' => 'required|numeric',
            'description' => 'required|string',
        ]);
        $about_me = AboutMe::find($id);
        if ($request->cv) {
            $about_me->cv = $request->cv->store('cv', 'public');
        }
        $about_me->heading = $request->heading;
        $about_me->experience = $request->experience;
        $about_me->completed_project = $request->completed_project;
        $about_me->companies = $request->companies;
        $about_me->description = $request->description;
        $about_me->update();
        return back()->withSuccess('Updated Successfully');
    }
}
