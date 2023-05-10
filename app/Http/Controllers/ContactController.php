<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reference;
use App\Models\contact;

class ContactController extends Controller
{
  public function index(){
    $contacts = Contact::all();
    return view('home.contact')->with([
        'contacts' => $contacts
    ]);;
  }

  public function indexView(){
    $references = Reference::all();
    return view('contact')->with([
        'references' => $references
    ]);;
  }

  public function store(Request $request){
    $contacts = Contact::all();
    $references = Reference::all();
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

    return view('thanks')->with([
      'contacts' => $contacts,
      'references' => $references,
     'thank' => 'thaks you to contact us '
    ]);
  }
  public function delete($id){
    $contacts = Contact::find($id);
    $contacts->delete();
    return view('home.contact')->with([
      'success' => 'deleted'
    ]);
}

}
