<?php

namespace App\Http\Controllers;

use App\Models\Club;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClubController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clubs = Club::all();
        return $clubs;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('club.createClub');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user = new User();
        $user->email = $request->input('email');
        $user->password = $request->input('password');
        $user->type = 0;
        $user->otp = 0;
        $user->status = 0;
        $user->save();

        $user_id = DB::getPdo()->lastInsertId(); // collect last id registred on DB

        $club = new Club();
        $club->id_user      = $user_id;
        $club->admin_name   = $request->input('admin_name');
        $club->club_name    = $request->input('club_name');
        $club->email        = $request->input('email');
        $indicatif          = $request->input('indicatif');        
        $club->phone        = "(+".$indicatif.")".$request->input('phone');
        $club->country      = $request->input('country');
        $club->city         = $request->input('city');
        $club->address      = $request->input('address');
        $club->description  = $request->input('description');

        if($request->file('logo')){
            $file       = $request->file('logo');
            $filename   = date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('public/Image'), $filename);
            $club->logo = $filename;
        }

        if($request->file('rec_def')){
            $file          = $request->file('rec_def');
            $filename      = date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('public/Image'), $filename);
            $club->rec_def = $filename;
        }

        $club->save();
        return redirect()->route('clubs.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Club $club)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Club $club)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Club $club)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Club $club)
    {
        //
    }
}
