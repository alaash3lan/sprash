<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\sliders;
use App\about;
use App\projects;
use App\information;
use App\people;

class FrontController extends Controller
{

    public function index()
    {




        $sliders = sliders::paginate(1);
        $about = about::paginate(1);
        $projects = projects::paginate(5);
        $info = information::paginate(1);
        $people = people::paginate(3);

        return view('sprash', compact(['sliders', 'about', 'projects', 'info', 'people']));

    }
}
