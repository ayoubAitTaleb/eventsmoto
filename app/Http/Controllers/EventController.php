<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EventController extends Controller
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
        $events = Event::all();
        return view('dashboard.allEvent', ['events' => $events]);
    }
    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.addEvent');
    }
    
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'          => 'required|min:3|max:60',
            'type'          => 'required|min:3|max:60',
            'start_date'    => 'required|date',
            'end_date'      => 'required|date',
            'city'          => 'required|min:2|max:30',
            'address'       => 'required|min:2|max:100',
            'description'   => 'max:500',
            'image'         => 'required|mimes:jpg,bmp,png',
        ]);
        $event = new Event();
        $event->name = $request->name;
        $event->id_user = Auth::user()->id_user;
        $event->type = $request->type;
        $event->start_date = $request->start_date;
        $event->end_date = $request->end_date;
        $event->city = $request->city;
        $event->address = $request->address;
        $event->description = $request->description;
        $event->status = 0;
        if($request->file('image'))
        {
            $file     = $request->file('image');
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('/images'), $filename);
            $event->image = $filename;
        }
        $event->save();
        return redirect("dashboard");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

    }
    
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view();
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

    public function myEvents()
    {
        $myEvents = Event::where('id_user', Auth::user()->id_user)->get();
        return view('dashboard.myEvents', ['myEvents' => $myEvents]);
    }
}
