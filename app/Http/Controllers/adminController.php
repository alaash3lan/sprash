<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\information;
use App\people;
use App\sliders;
use App\about;
use App\projects;

class adminController extends Controller
{
    public function index()
    {

        return view('admin.index');

    }


    public function slider()
    {
        $sliders = sliders::all();
        return view('admin.slider', compact('sliders'));

    }

    public function about()
    {
        $about = about::all();
        if (!$about) {
            dd($about);
        }
        return view('admin.about', compact('about'));

    }

    public function info()
    {

        $infos = information::all();

        return view('admin.info', compact('infos'));

    }



    public function people()
    {
        $people = people::all();
        return view('admin.peoble', compact('people'));

    }

    public function portfolio()
    {
        $projects = projects::all();

        return view('admin.portfolio', compact('projects'));

    }
}
