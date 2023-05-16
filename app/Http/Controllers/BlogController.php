<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::all();
        return view('home.Blog')->with([
            'blogs' => $blogs
        ]);
    }
    public function indexView()
    {
        $blogs = Blog::latest()->paginate(3);
        return view('Blog')->with([
            'blogs' => $blogs
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create.createBlog');
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
            $file->move(public_path('image_blog'), $image_name);
        }

        $this->validate($request,[
            'title'=> 'required|min:3|max:100',  
            'title_two'=> 'required|min:3|max:100',
            'discp'=> 'required|min:3',                        
        ]);
             
        Blog::create([
            'title' => $request->title,
            'title_two' => $request->title_two,
            'image' =>  $image_name,
            'discp' => $request->discp,
        ]);
        return redirect()->route('blogs')->with([
                        'success' => 'blog added'
                     ]) ;
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($title)
    {
        $blog = Blog::where('title',$title)->first();
      return view('blogProjet')->with([
        'blog' => $blog
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
        $blog = Blog::find($id);
        return view('edit.editBlog')->with([
             'blog' => $blog
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
            'title_two'=> 'required|min:3|max:100',  
            'discp'=> 'required|min:3',                        
        ]);

        $blog = Blog::find($id);
       
        $image_name=null;
        
        if($request->has('image')){
            $file = $request->image;
            $image_name = time() . '_' . $file->getClientOriginalName(); // file name + Date
            $file->move(public_path('image_blog'), $image_name);
            // Storage::putFileAs('image_blog',$file, $image_name);
        }
        

        $blog->update([
            'title' => $request->title,
            'title_two' => $request->title_two,
            'image' =>  $blog->image,
            'discp' => $request->discp,
        
        ]);
        return redirect()->route('blog')->with([
            'success' => 'blog updated'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $blog = Blog::find($id);
        $blog->delete();
        return redirect()->route('blogs')->with([
          'success' => 'Blog deleted'
        ]);
    }
}
