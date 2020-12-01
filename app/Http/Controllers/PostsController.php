<?php

namespace App\Http\Controllers;
use App\Posts;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index()
    {
        $posts=Posts::get();
    	return view("welcome",["posts"=>$posts]);
    }
    public function store(Request $request)
    {
        Posts::create([
            "title"=>$request->input("title"),
            "user_id"=>$request->input("user_id"),
            "description"=>$request->input("description")
        ]);
        return redirect()->back();
    }
    public function edit($id)
    {
        $posts=Posts::where('id',$id)->firstOrFail();
        return view('edit',['posts'=>$posts]);
    }
    public function update(Request $request)
    {
        Posts::where('id',$request->input('id'))->update([
            "title"=>$request->input("title"),
            "user_id"=>$request->input("user_id"),
            "description"=>$request->input("description")
        ]);
        return redirect()->route("home");
    }
}
