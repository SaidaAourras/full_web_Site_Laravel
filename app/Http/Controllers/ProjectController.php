<?php

namespace App\Http\Controllers;
use App\Models\Project;
use App\Models\Category;
use App\Models\Reference;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    
        public function index()
    {
        $projects = Project::all();
        return view('home.project')->with([
            'projects' => $projects
        ]);
    }

    // portfolio front end

    public function indexView()
    {
        $references = Reference::all();
        $categories = Category::all();
        $projects = Project::all();
        return view('portfolio')->with([
            'references' => $references,
             'categories' => $categories,
            'projects' => $projects
        ]);
    }

    // chaque project a son categery
            
            public function indexPortfolio(Request $request)
        {
            $references = Reference::all();
            $categories = Category::all();
            $selectedCategory = $request->query('category');
            if ($selectedCategory) {
                $projects = Project::where('category_id', $selectedCategory)->get();
            } else {
                $projects = Project::all();
            }
            return view('portfolio', compact('projects', 'categories', 'selectedCategory'))->with([
                       'references' => $references
            ]);
        }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('create.createProject', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->has('image')){
            $file = $request->image;
            $image_name = time() . '_' . $file->getClientOriginalName(); // file name + Date
            $file->move(public_path('image_project'), $image_name);
        }

        $this->validate($request,[
            'title'=> 'required|min:3|max:100',       
            'link'=> 'required',            
            'discp'=> 'required|min:3',            
            'category_id'=> 'required',            

            
        ]);
             
       Project::create([
            'title' => $request->title,
            'image' =>  $image_name,
            'link' => $request->link,
            'discp' => $request->discp,
            'category_id' => $request->category_id,
        ]);
        return redirect()->route('project')->with([
                'success' => 'Project created'
             ]) ;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($title)
    { $categories = Category::all();
        $references = Reference::all();
      $project = Project::where('title',$title)->first();
      return view('detailsProjet')->with([
        'categories' => $categories,
        'references' => $references,
     'project' => $project
      ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = Category::all();
        $project = Project::find($id);
        return view('edit.editProject' ,compact('categories'))->with([
            'categories' => $categories,
              'project' => $project
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
     {
        $this->validate($request,[
            'title'=> 'required|min:3|max:100',                     
            'link'=> 'required',            
            'discp'=> 'required|min:3',            
            'category_id'=> 'required',    
            
        ]);
        $project = Project::find($id);
        
        // **
        //update logo

        if($request->has('image')){
            $file = $request->image;
            $image_name = time() . '_' . $file->getClientOriginalName(); // file name + Date
            $file->move(public_path('image_project'), $image_name);

            //pour supprimer l'ancienne image dans la base de donne
            unlink(public_path('image_project') . '/' . $project->image);
            $project->image = $image_name;
        }
         
         // **
         //update all

        $project->update([
            'title' => $request->title,
            'image'  => $project->image,
            'link' => $request->link,
            'discp' => $request->discp,
            'category_id' => $request->category_id,
      ]);
           return redirect()->route('project')->with([
              'success' => 'Project updated '
           ]) ;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $project = Project::find($id);
        $project->delete();
        return redirect()->route('project')->with([
          'success' => 'Project Created'
        ]);
    }
}