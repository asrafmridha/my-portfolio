<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Feature;
use App\Models\Project;
use App\Models\ProjectContent;
use App\Models\Service;
use App\Models\ServiceContent;
use App\Models\WebService;
use App\Models\WebServiceContent;
use App\Models\WorkingProcess;
use App\Models\WorkingProcessContent;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('frontend.index');
    }
}
