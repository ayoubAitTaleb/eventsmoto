<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

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
            'cover'         => 'required|mimes:jpg,bmp,png',
            'image_1'       => 'mimes:jpg,bmp,png',
            'image_2'       => 'mimes:jpg,bmp,png',
            'image_3'       => 'mimes:jpg,bmp,png',
            'image_4'       => 'mimes:jpg,bmp,png',
            'image_5'       => 'mimes:jpg,bmp,png'
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

        if($request->file('cover'))
        {
            $file     = $request->file('cover');
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('/images'), $filename);
            $event->cover = $filename;
        }
        if($request->file('image_1'))
        {
            $file     = $request->file('image_1');
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('/images'), $filename);
            $event->image_1 = $filename;
        }
        if($request->file('image_2'))
        {
            $file     = $request->file('image_2');
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('/images'), $filename);
            $event->image_2 = $filename;
        }
        if($request->file('image_3'))
        {
            $file     = $request->file('image_3');
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('/images'), $filename);
            $event->image_3 = $filename;
        }
        if($request->file('image_4'))
        {
            $file     = $request->file('image_4');
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('/images'), $filename);
            $event->image_4 = $filename;
        }
        if($request->file('image_5'))
        {
            $file     = $request->file('image_5');
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('/images'), $filename);
            $event->image_5 = $filename;
        }
        
        $event->save();
        return redirect("dashboard");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $event = Event::findOrFail($id);
        return view('dashboard.showEvent', ['event' => $event]);
    }
    
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $event = Event::findOrFail($id);
        return view('dashboard.editEvent', ['event' => $event]);
    }
    
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $event = Event::findOrFail($id);
        $event->name = $request->name;
        $event->type = $request->type;
        $event->start_date = $request->start_date;
        $event->end_date = $request->end_date;
        $event->city = $request->city;
        $event->address = $request->address;
        $event->description = $request->description;

        if($request->hasFile('cover')){
            $destination = public_path('images/' . $event->cover);
            if(File::exists($destination)){
                File::delete($destination);
            }
            $file     = $request->file('cover');
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('/images'), $filename);
            $event->cover = $filename;
        }

        if($request->hasFile('image_1')){
            $destination = public_path('images/' . $event->image_1);
            if(File::exists($destination)){
                File::delete($destination);
            }
            $file     = $request->file('image_1');
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('/images'), $filename);
            $event->image_1 = $filename;
        }

        if($request->hasFile('image_2')){
            $destination = public_path('images/' . $event->image_2);
            if(File::exists($destination)){
                File::delete($destination);
            }
            $file     = $request->file('image_2');
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('/images'), $filename);
            $event->image_2 = $filename;
        }

        if($request->hasFile('image_3')){
            $destination = public_path('images/' . $event->image_3);
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $file     = $request->file('image_3');
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('/images'), $filename);
            $event->image_3 = $filename;
        }

        if($request->hasFile('image_4')){
            $destination = public_path('images/' . $event->image_4);
            if(File::exists($destination)){
                File::delete($destination);
            }
            $file     = $request->file('image_4');
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('/images'), $filename);
            $event->image_4 = $filename;
        }

        if($request->hasFile('image_5')){
            $destination = public_path('images/' . $event->image_5);
            if(File::exists($destination)){
                File::delete($destination);
            }
            $file     = $request->file('image_5');
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('/images'), $filename);
            $event->image_5 = $filename;
        }

        $event->save();
        return redirect('events/myevents');
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
