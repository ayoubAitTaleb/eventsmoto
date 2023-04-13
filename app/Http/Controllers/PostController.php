<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        // 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("post.addPost");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'description' => 'required|max:500',
            'image'       => 'required|mimes:jpg,bmp,png'
        ]);
        $post = new Post();
        $post->id_user = 1;
        $post->description = $request->description;
        $post->id_user = Auth::user()->id_user;
        if($request->file('image'))
        {
            $file     = $request->file('image');
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('/images'), $filename);
            $post->image = $filename;
        }
        $post->save();
        return redirect("dashboard");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $post = Post::findOrFail($id);
        return $post;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $post = Post::findOrFail($id);
        return $post;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $post = new Post();
        $post->title = $request->title;
        $post->id_user = 1;
        $post->category = $request->category;
        $post->slug = $request->slug;
        $post->status = $request->status;
        $post->content = $request->content;
        if($request->file('image'))
        {
            $file     = $request->file('image');
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('/images'), $filename);
            $post->image = $filename;
        }
        $post->save();
        return redirect("posts");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $member = Post::findOrFail($id);
        $member->delete();
        return redirect()->back();
    }
}
