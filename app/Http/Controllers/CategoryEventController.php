<?php

namespace App\Http\Controllers;

use App\CategoryEvent;
use Illuminate\Http\Request;

class CategoryEventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = categoryevent::orderBy('description')->paginate(7);

        return view('categoryevent.list', compact('categoriesevents'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         
        return view('categoryevent.create');
    }


    public function save(Request $request){

        $validate = $this->validate($request, [
            'description' => 'required'
        ]);
        $categoryevent = new categoryevent();
        $categoryevent->description = $request->input('description');
        $categoryevent->save();

        return redirect()->route('categories')->with(array(
            'message'=> 'New categoryevent Submitted!'
        ));
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
     * @param  \App\categoryevent  $categoryevent
     * @return \Illuminate\Http\Response
     */
    public function show(categoryevent $categoryevent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\categoryevent  $categoryevent
     * @return \Illuminate\Http\Response
     */
    public function edit(categoryevent $categoryevent)
    {
        return view('categoryevent.edit', compact('categoryevent'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\categoryevent  $categoryevent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, categoryevent $categoryevent)
    {
        $validate   = $this->validate($request, [
            'description' => 'required'
            ]);

        $cat_up = categoryevent::findOrFail($categoryevent->id);
        $cat_up-> description = $request-> input('description');

        $cat_up->update();

        return redirect()->route('categoryevent')->with(array(
            'messaage'=> 'The categoryevent Has Been Updated!'
        ));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\categoryevent  $categoryevent
     * @return \Illuminate\Http\Response
     */
    public function destroy(categoryevent $categoryevent)
    {
         $categoryeventDelete = categoryevent::find($categoryevent->id);
        $categoryeventDelete-> delete();

        return redirect()->route('categories')->with(array(
            'message' => 'categoryevent Deleted!'
        ));
    }
}
