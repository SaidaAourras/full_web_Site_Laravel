<?php

namespace App\Http\Controllers;
namespace App\Http\Controllers;
use App\Models\Category;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        return view('category')->with([
            'categories' => $categories
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('createCategory');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name'=> 'required|min:3|max:100',
            
        ]);
        Category::create([
              'name' => $request->name,
        ]);
             return redirect()->route('category')->with([
                'success' => 'bien'
             ]) ;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id){
        $category = Category::find($id);
        return view('editCategory')->with([
              'category' => $category
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id){

        $this->validate($request,[
            'name'=> 'required|min:3|max:100',
            
        ]);
        $category = Category::find($id);
        
         // **
         //update all

        $category->update([
            'name' => $request->name,
      ]);
           return redirect()->route('category')->with([
              'success' => 'la category est modifiee '
           ]) ;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id){
        $category = Category::find($id);
        $category->delete();
        return redirect()->route('category')->with([
          'success' => 'category supprime'
        ]);
    }
}
