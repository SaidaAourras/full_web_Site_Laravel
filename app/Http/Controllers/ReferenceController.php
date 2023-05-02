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
        return view('reference', ['references' => Reference::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $reference = new Reference();
        $reference->name = $request->input('name');

        if ($request->hasfile('logo')) {
            $file = $request->file('logo');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extenstion;
            $file->move('logos/', $filename);
            $reference->logo = $filename;
        }

        $reference->save();
        return redirect('/');
    }

    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Reference $reference )
    {
        return view('show', [
            'reference' => $reference,

        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Reference $reference)
    {
        return view('edit', [
            'reference' => $reference,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reference $reference)
    {
        $reference->update(
            $request->validate([
                'name' => $request->name,
                'logo' =>"https://via.placeholder.com/640x480.png/00ee00?text=new post",
            ])
        );
        return redirect()->route('home');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $reference = Reference::find($id);
        $reference->delete();
        return redirect()->route('home')->with([
            'siccess' => 'Article supprime'
        ]);
    }
}