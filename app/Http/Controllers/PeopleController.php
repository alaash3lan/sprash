<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\people;

class PeopleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $people = people::all();
        return view('admin.peoble', compact('people'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        // $person = new people;
        $input = $request;

        $input = collect($input)->forget('_token')->all();
        if ($file = $request->file('photo_id')) {
            $name = time() . $file->getClientOriginalName();

            $file->move('images', $name);
            $photo = \App\Photo::create(['file' => $name]);

            $input['photo_id'] = $photo->id;
        }

        people::create($input);
        return redirect('admin/people');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $person = people::findOrFail($id);
        return view('admin.people.edit', compact('person'));
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
        people::whereId($id)->first()->update($input);
        return redirect('admin/people');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $person = people::findOrFail($id);

        if (!$person->photo_id == null) {
            unlink(public_path() . '/' . 'images' . '/' . $person->photo->file);
        }

        $person->delete();

        return redirect('admin/people');

    }
}
