<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\sliders;

class SliderController extends Controller
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
    public function create(Request $request)
    {
        $input = $request;

        $input = collect($input)->forget('_token')->all();
        if ($file = $request->file('photo_id')) {
            $name = time() . $file->getClientOriginalName();

            $file->move('images', $name);
            $photo = \App\Photo::create(['file' => $name]);

            $input['photo_id'] = $photo->id;
        }

        sliders::create($input);
        return redirect('admin/slider');
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
        $slider = sliders::findOrFail($id);
        return view('admin.slider.edit', compact('slider'));
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
        sliders::whereId($id)->first()->update($input);
        return redirect('admin/slider');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $slider = sliders::findOrFail($id);

        if (!$slider->photo_id == null) {
            unlink(public_path() . '/' . 'images' . '/' . $slider->photo->file);
        }

        $slider->delete();

        return redirect('admin/slider');
    }
}
