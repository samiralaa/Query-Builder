<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
  
    public function index()
    {
       $post= DB::table('posts')->get();
       $users = DB::table('posts')->count();
       return view('posts.index',compact('post','users'));

    }

    
    public function create()
    {
     return view('posts.create');
    }

    
    public function store(Request $request)
    {
        //the sql DB
        // DB::table('posts')->insert([
        //     'name'=>$request->name,
        //     'size'=>$request->size,
        //     'title'=>$request->title,
        //     'content'=>$request->content
        // ]);
        //create way
     Post::create($request->all());
     return redirect()->back();  
   

    }

    public function show(Post $id)
    {
       return view('posts.show',compact('id'));
    }

    public function edit( $id)
    {
        $post=DB::table('posts')->where('id',$id)->first();
        //or
        // return view('posts.edit',compact('id'));
        //or
    //    $post=Post::find($id);
       return view('posts.edit',compact('post'));
    }

    
    public function update(Request $request,Post $id)
    {
        // DB::table('posts')->where('id',$id)->update([
        //     'name'=>$request->name,
        //     'size'=>$request->size,
        //     'title'=>$request->title,
        //     'content'=>$request->content  
        // ]);
      
       $id->update($request->all());
       
       return redirect()->back();
    }

    public function destroy(Post $id)
    {
       $id->delete();
       return redirect()->back();
    }
}
