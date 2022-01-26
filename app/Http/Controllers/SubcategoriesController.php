<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;
use App\Models\Subcategories;

class SubcategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subcategorys=Subcategories::latest()->with(['category'])->get();
  
        return view('pages.subcategory.index',compact('subcategorys'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories=category::latest()->get();
        return view('pages.subcategory.create', ['categories' => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Subcategories::create([
            'category_id'=>$request->category_id,
            'name'=>$request->name,
            'slug' =>$request->slug,
            'thumbnail' =>$request->thumbnail,

        ]);

        return redirect('subcategory')->with('message','successfuly created new task');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Subcategories  $subcategories
     * @return \Illuminate\Http\Response
     */
    public function show(Subcategories $subcategories)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Subcategories  $subcategories
     * @return \Illuminate\Http\Response
     */
    public function edit(Subcategories $subcategories)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Subcategories  $subcategories
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Subcategories $subcategories)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Subcategories  $subcategories
     * @return \Illuminate\Http\Response
     */
    public function destroy(Subcategories $subcategories)
    {
        //
    }
}
