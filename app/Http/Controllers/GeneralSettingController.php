<?php

namespace App\Http\Controllers;

use App\Models\GeneralSetting;
use Illuminate\Http\Request;
use Illuminate\View\View;

class GeneralSettingController extends Controller
{
    function index(): View
    {
        $generalSettings = GeneralSetting::first();
        return view('backend.generalsetting.edit', compact('generalSettings'));
    }
    function update(Request $request, $id)
    {
        $request->validate([
            'name'              => 'required|string',
            'email'             => 'required|email',
            'alter_email'       => 'email|nullable',
            'phone'             => 'required|string',
            'alter_phone'       => 'string|nullable',
            'about_description' => 'required|string',
            'footer_description' => 'required|string',
            'designation'       => 'required|string',
            'contact_button'    => 'required|string',
            'cv_button'         => 'required|string',
            'demo_button'       => 'required|string',
            'fb_link'           => 'required|string',
            'github_link'       => 'required|string',
            'linkedin_link'     => 'required|string',
            'address'           => 'required|string',
        ]);
        $data = GeneralSetting::find($id);
        if ($request->logo) {
            $data->logo = $request->logo->store('logo', 'public');
        }
        if ($request->favicon) {
            $data->favicon = $request->favicon->store('favicon', 'public');
        }
        if ($request->first_image) {
            $data->first_image = $request->first_image->store('profile', 'public');
        }
        if ($request->second_image) {
            $data->second_image = $request->second_image->store('profile', 'public');
        }
        if ($request->contact_bg) {
            $data->contact_bg = $request->contact_bg->store('contact', 'public');
        }
        $data->name             = $request->name;
        $data->email            = $request->email;
        $data->designation      = $request->designation;
        $data->contact_button   = $request->contact_button;
        $data->cv_button        = $request->cv_button;
        $data->demo_button      = $request->demo_button;
        $data->fb_link          = $request->fb_link;
        $data->github_link      = $request->github_link;
        $data->linkedin_link    = $request->linkedin_link;
        $data->email_image      = $request->email_image;
        $data->phone_image      = $request->phone_image;
        $data->address          = $request->address;
        $data->alter_email      = $request->alter_email;
        $data->phone            = $request->phone;
        $data->alter_phone      = $request->alter_phone;
        $data->meta_keywords    = $request->meta_keywords;
        $data->meta_title       = $request->meta_title;
        $data->meta_description = $request->meta_description;
        $data->copyright_text   = $request->copyright_text;
        $data->about_description = $request->about_description;
        $data->footer_description = $request->footer_description;
        $data->update();

        return back()->with('success', 'General Setting Successfully Updated.');
    }
}
