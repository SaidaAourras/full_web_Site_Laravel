<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reference;

class ReferenceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $references = Reference::all();
        return view('reference')->with([
            'references' => $references
        ]);
    }



    public function create(){
        return view("createReference");
    }

    public function store(Request $request){

        if($request->has('logo')){
            $file = $request->logo;
            $image_name = time() . '_' . $file->getClientOriginalName(); // file name + Date
            $file->move(public_path('uploads'), $image_name);
        }

        $this->validate($request,[
            'name'=> 'required|min:3|max:100',
            
        ]);
        Reference::create([
              'name' => $request->name,
              'logo'  => $image_name,
        ]);
             return redirect()->route('reference')->with([
                'success' => 'la reference ajoute '
             ]) ;
    }

     // **
       //edit references
     // **

    public function edit($id){
        $reference = Reference::find($id);
        return view('editReference')->with([
              'reference' => $reference
        ]);
    }

    // **
       //to update what is edited
    // **

    public function update(Request $request,$id){

        $this->validate($request,[
            'name'=> 'required|min:3|max:100',
            
        ]);
        $reference = Reference::find($id);
        
        // **
        //update logo

        if($request->has('logo')){
            $file = $request->logo;
            $image_name = time() . '_' . $file->getClientOriginalName(); // file name + Date
            $file->move(public_path('uploads'), $image_name);

            //pour supprimer l'ancienne image dans la base de donne
            unlink(public_path('uploads') . '/' . $reference->logo);
            $reference->logo = $image_name;
        }
         
         // **
         //update all

        $reference->update([
            'name' => $request->name,
            'logo'  => $reference->logo,
      ]);
           return redirect()->route('reference')->with([
              'success' => 'la reference est modifiee '
           ]) ;
    }

    public function delete($id){
        $reference = Reference::find($id);
        $reference->delete();
        return redirect()->route('reference')->with([
          'success' => 'Reference supprime'
        ]);
    }

}
