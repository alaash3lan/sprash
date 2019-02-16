<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\projects;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request;

        $input = collect($input)->forget('_token')->all();
        if ($file = $request->file('photo_id')) {
            $name = time() . $file->getClientOriginalName();

            $file->move('images', $name);
            $photo = \App\Photo::create(['file' => $name]);

            $input['photo_id'] = $photo->id;
        }

        projects::create($input);
        return redirect('admin/portfolio');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {


        $project = projects::findOrFail($id);
        return view('admin.project.edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $input = collect($request)->forget(['_token', '_method'])->all();
        if ($file = $request->file('photo_id')) {
            $name = time() . $file->getClientOriginalName();

            $file->move('images', $name);
            $photo = \App\Photo::create(['file' => $name]);

            $input['photo_id'] = $photo->id;
        }
        projects::whereId($id)->first()->update($input);
        return redirect('admin/portfolio');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $project = projects::findOrFail($id);

        if (!$person->photo_id == null) {
            unlink(public_path() . '/' . 'images' . '/' . $person->photo->file);
        }

        $project->delete();

        return redirect('admin/portfolio');


    }
}
