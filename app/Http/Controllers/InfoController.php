<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\information;
use Illuminate\Support\Facades\Redirect;


class InfoController extends Controller
{
    public function store(Request $request)
    {
        $info = new information;
        $info->coffee = $request['coffee'];
        $info->happy_clients = $request['happy_clients'];
        $info->real_professionals = $request['real_professionals'];
        $info->projects_done = $request['projects_done'];
        $info->save();

        return Redirect('admin/info');


    }



    public function edit($id)
    {
        $info = information::findOrFail($id);
        return view('admin.info.edit', compact('info'));
    }

    public function update(Request $request, $id)
    {

        $info = information::find($id);
        $info->coffee = $request['coffee'];
        $info->happy_clients = $request['happy_clients'];
        $info->real_professionals = $request['real_professionals'];
        $info->projects_done = $request['projects_done'];
        $info->save();

        return Redirect('admin/info');


    }
}
