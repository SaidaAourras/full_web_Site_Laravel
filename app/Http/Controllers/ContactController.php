<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reference;
use App\Models\contact;

class ContactController extends Controller
{
  public function index(){
    $references = Reference::all();
    return view('contact')->with([
        'references' => $references
    ]);;
  }

  public function store(Request $request){

    $this->validate($request,[
        'name'=> 'required|min:3|max:100',       
        'email'=> 'required',       
        'num'=> 'required|min:9|max:10',       
        'object'=> 'required|min:3|max:100',       
        'message'=> 'required',               
    ]);
    Contact::create([
        'name' => $request -> name,
        'email'=> $request -> email,
        'num'=> $request -> num,
        'object'=> $request -> object,
        'message'=> $request -> message,
    ]);

    return redirect()->route('thanks')->with([
     'thank' => 'thaks you to contact us '
    ]);
  }
}
