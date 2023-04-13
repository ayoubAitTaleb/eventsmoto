<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MessageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.sendMessage');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $message = new Message();
        $message->id_user     = Auth::user()->id_user;
        $message->source      = Auth::user()->email;
        $message->destination = $request->input('destination');
        $message->subject     = $request->input('subject');
        $message->content     = $request->input('content');
        $message->trashed     = false;
        $message->readed      = false;
        if($request->file('attatchments'))
        {
            $file     = $request->file('attatchments');
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('/attatchments'), $filename);
            $message->attatchments = $filename;
        }
        $message->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
