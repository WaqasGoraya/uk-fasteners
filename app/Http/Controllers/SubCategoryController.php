<?php

namespace App\Http\Controllers;

use App\Models\SubCategory;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subcategories = SubCategory::all();
        return view('subcategory.view',compact('subcategories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::all();
        return view('subcategory.add',compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([

            'name' => 'required|min:3',
            'category_id' => 'required',
        ]);
        $input = $request->all();
        SubCategory::create($input);
        Session::flash('message', 'Category created successfully!');
        Session::flash('alert-class', 'alert-success');
        return redirect('sub-categories');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SubCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        
    }
    public function subcaegory(Request $request)
    {
        $id = $request->category_id;
        $subcategories = SubCategory::where('category_id',$id)->get();
        $html = "";
        $html .= "<select class='form-control' id='sub_category_id' name='sub_category_id'>";
        $html .= "<option>Select Subcategory</option>";
        foreach ($subcategories as $data) {
            $html .= "<option value='{$data->id}'>{$data->name}</option>";
        }
        $html .= "</select>";
        return $html;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SubCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $subcategory = SubCategory::findOrFail($id);
        $category = Category::all();
        if ($subcategory == null) {
            return redirect()->back()->with('error', 'No Record Found.');
        }
        return view('subcategory.edit', compact('subcategory', 'category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SubCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|min:3',
            'category_id' => 'required',
        ]);
        $subcategory = SubCategory::where('id', $id)->first();
        $subcategory->name = $request->name;
        $subcategory->category_id = $request->category_id;
        $subcategory->save();
        Session::flash('message', 'Category Updated Successfully');
        Session::flash('alert-class', 'alert-success');
        return redirect('sub-categories');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SubCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $subcategory = SubCategory::find($id);
        $subcategory->delete();
        Session::flash('message', 'Category deleted successfully!');
        Session::flash('alert-class', 'alert-success');
        return redirect()->back();
    }
}
