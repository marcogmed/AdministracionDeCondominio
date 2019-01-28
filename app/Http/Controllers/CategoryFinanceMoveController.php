<?php

namespace App\Http\Controllers;

use App\CategoryFinanceMove;
use Illuminate\Http\Request;

class CategoryFinanceMoveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $catFinMov = CategoryFinanceMove::orderBy ('description')->paginate(9);
        return view ('FinanceCategory.listFinanceCategory', compact('catFinMov'));
        //echo "Dentro!!";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('FinanceCategory.createFinanceCategory');
    }

    public function save(Request $request)
    {
        $validate = $this->validate($request, [
            'description' => 'required'
        ]);

        $financeCategory = new financeCategory();
        $financeCategory->description = $request->input('description');
        //$video->user_id = 1;
        $financeCategory->save();

        return redirect()->route('finaceCategory')->with(array(
            'message'=> 'Category Created!'
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
     * @param  \App\CategoryFinanceMove  $categoryFinanceMove
     * @return \Illuminate\Http\Response
     */
    public function show(CategoryFinanceMove $categoryFinanceMove)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CategoryFinanceMove  $categoryFinanceMove
     * @return \Illuminate\Http\Response
     */
    public function edit(CategoryFinanceMove $categoryFinanceMove)
    {
        return view('FinanceCategory.editFinanceCategory', compact('categoryFinanceMove'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CategoryFinanceMove  $categoryFinanceMove
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CategoryFinanceMove $categoryFinanceMove)
    {
        $validate   = $this->validate($request, [
            'description' => 'required'
            ]);

        $financeCategoryupdate = CategoryFinanceMove::findOrFail($categoryFinanceMove->id);
        $financeCategoryupdate-> description = $request-> input('description');

        $financeCategoryupdate->update();

        return redirect()->route('financeCategory')->with(array(
            'messaage'=> 'Fiance Category Updated!'
        ));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CategoryFinanceMove  $categoryFinanceMove
     * @return \Illuminate\Http\Response
     */
    public function destroy(CategoryFinanceMove $categoryFinanceMove)
    {
        $categoryFinanceDelete = CategoryFinanceMove::find($categoryFinanceMove->id);
        $categoryFinanceDelete-> delete();

        return redirect()->route('financeCategory')->with(array(
            'message' => 'Finance Category Deleted!'
        ));
    }
}
