<?php

namespace App\Http\Controllers;

use App\Place;
use Illuminate\Http\Request;

class PlaceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $placescontroller = Place::orderBy('description')-> paginate(9);
        return view('Places.listPlaces', compact('placescontroller'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Places.createPlaces');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function upload(Request $request)
    {
        $validate = $this-> validate($request, [
            'description'=> 'required',
            'img_url' => 'required|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        if (Input::hasFile('img_url')) {

            $placeStorage = new placeStorage();
            $placestorage->description = $request->input ('description');
            $placeStorage = Input::file('img_url');
            $placeStorage -> move('storage/app/public', $file->getClientOriginalName());
        }

        /*$placeStore = new placeStore();
        $placeStore->description = $request->input('description');
        $placeStore->img_url = $request->file('img_url')->store('img_url');
        //user validation
        $placeStore->save();*/

        return redirect()-> route('places')-> with(array(
            'message'=> 'Lugar Agregado!'
        ));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Place  $place
     * @return \Illuminate\Http\Response
     */
    public function show(Place $place)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Place  $place
     * @return \Illuminate\Http\Response
     */
    public function edit(Place $place)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Place  $place
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Place $place)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Place  $place
     * @return \Illuminate\Http\Response
     */
    public function destroy(Place $place)
    {
        //
    }
}
