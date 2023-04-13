<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class UserController extends Controller
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
        $user = User::all();
        return $user;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     */
    public function show(User $id)
    {
        $user = User::find($id);
        $type = strval(Auth::user()->type);
        $myPosts = Post::where('id_user', Auth::user()->id_user)->get();
        return view('dashboard.mainProfile', ['user' => $user, 'type' => $type, 'myPosts' => $myPosts]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = User::findOrFail($id);
        if($request->hasFile('avatar')){
            $destination = public_path('images/' . $user->avatar);
            if(File::exists($destination)){
                File::delete($destination);
            }
            $file     = $request->file('avatar');
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('/images'), $filename);
            $user->avatar = $filename;
        }
        $user->save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}
