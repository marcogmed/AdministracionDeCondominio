<?php

namespace App\Http\Controllers;

use App\CategoryStatus;
use Illuminate\Http\Request;

class CategoryStatusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $catStatus = CategoryStatus::orderBy('description')->paginate(7);

        return view('categoryStatus.listCategoryStatus', compact('catStatus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('categoryStatus.createCategoryStatus');
    }

    public function save(Request $request)
    {
        $validate = $this->validate($request, [
            'description' => 'required'
        ]);
        $categoryStatus = new categoryStatus();
        $categoryStatus->description = $request->input('description');
        //$categoryStatus->user_id = 1;
        $vcategoryStatus->save();

        return redirect()->route('statusCategory')->with(array(
            'message'=> 'Category Status Created!'
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
     * @param  \App\CategoryStatus  $categoryStatus
     * @return \Illuminate\Http\Response
     */
    public function show(CategoryStatus $categoryStatus)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CategoryStatus  $categoryStatus
     * @return \Illuminate\Http\Response
     */
    public function edit(CategoryStatus $categoryStatus)
    {
        return view('categoryStatus.editCategoryStatus', compact('categoryStatus'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CategoryStatus  $categoryStatus
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CategoryStatus $categoryStatus)
    {
        $validate   = $this->validate($request, [
            'description' => 'required'
            ]);

        $categoryStatusUpdate = CategoryStatus::findOrFail($video->id);
        $categoryStatusUpdate-> description = $request-> input('description');

        $categoryStatusUpdate->update();

        return redirect()->route('statusCategory')->with(array(
            'messaage'=> 'Category Status updated!'
        ));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CategoryStatus  $categoryStatus
     * @return \Illuminate\Http\Response
     */
    public function destroy(CategoryStatus $categoryStatus)
    {
        $categoryStatusDelete = CategoryStatus::find($categoryStatus->id);
        $categoryStatusDelete-> delete();

        return redirect()->route('statusCategory')->with(array(
            'message' => 'Category Status Deleted!'
        ));
    }
}
