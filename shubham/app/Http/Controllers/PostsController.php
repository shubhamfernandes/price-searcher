<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Post;
use DB;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts= Post::all();
        return view('posts.index')->with('posts',$posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $post= Post::find($id);
        return view('posts.show')->with('post',$post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post= Post::find($id);
        return view('posts.edit')->with('post',$post);
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
         
         $this->validate($request,['body'=>'required','cover_image'=>'required|mimes:jpeg,png,jpg,gif,svg|max:2048']);
        //file name to upload
        if($request->hasFile('cover_image'))
        {
            //get file name with ext
            $filennameWithExt=$request->file('cover_image')->getClientOriginalName();
            //get file name
            $filename=pathinfo($filennameWithExt,PATHINFO_FILENAME);
            //get ext
            $extension=$request->file('cover_image')->getClientOriginalExtension();
            //filename to store
            $filenametostore=$filename.'_'.time().'.'.$extension;
            //upload
            $path=$request->file('cover_image')->storeAs('public/cover_images',$filenametostore);
        }
        
        //create
        $post=Post::find($id);
        $post->body=$request->input('body');
        $post->cover_image=$filenametostore;
        if($post->cover_image!="")
        {
           $post->status='Done';
           
        } 
        else
            {
           $post->status='Incomplete';
           
        } 
        
        $post->save();


        return redirect('/posts')->with('success','Post Updated');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
