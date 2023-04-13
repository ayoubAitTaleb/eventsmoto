<?php

namespace App\Http\Controllers;

use App\Models\Club;
use App\Models\User;
use App\Mail\SendOtp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\RedirectResponse;

class ClubController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clubs = Club::all();
        return view('dashboard.allClubs', ['clubs' => $clubs]);
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
    public function store(Request $request): RedirectResponse
    {        
        $request->validate([
            'admin_name'    => 'required|min:3|max:60',
            'club_name'     => 'required|min:3|max:60',
            'email'         => 'required|email|unique:users',
            'password'      => 'required|min:6|max:10',
            'indicatif'     => 'required',
            'phone'         => 'required|min:6|max:20',
            'country'       => 'required|min:2|max:30',
            'city'          => 'required|min:2|max:30',
            'address'       => 'required|min:2|max:100',
            'description'   => 'max:500',
            'logo'          => 'required|mimes:jpg,bmp,png',
            'rec_def'       => 'required|mimes:jpg,bmp,png,pdf'
        ]);
        
        $user = new User();
        $user->name     = $request->input('admin_name');
        $user->email    = $request->input('email');
        $user->password = Hash::make($request->input('password'));

           if($request->file('logo'))
            {
                $file        = $request->file('logo');
                $file_name   = date('YmdHi').$file->getClientOriginalName();
                $user->avatar = $file_name;
            } 

        $user->type = 0; // 0 = club
        $otp = mt_rand(000000,999999);            
        $user->otp = $otp;
        $user->status = 0;
        $user->save();

        $user_id = DB::getPdo()->lastInsertId(); // collect last id registred on DB
        
        $club = new Club();
        $club->id_user      = $user_id;
        $club->admin_name   = $request->input('admin_name');
        $club->club_name    = $request->input('club_name');
        $club->email        = $request->input('email');
        $club->indicatif    = $request->input('indicatif');        
        $club->phone        = $request->input('phone');
        $club->country      = $request->input('country');
        $club->city         = $request->input('city');
        $club->address      = $request->input('address');
        $club->description  = $request->input('description');

        if($request->file('logo'))
        {
            $file       = $request->file('logo');
            $filename   = date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('/images'), $filename);
            $club->logo = $filename;
        }

        if($request->file('rec_def'))
        {
            $file          = $request->file('rec_def');
            $filename      = date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('/images'), $filename);
            $club->rec_def = $filename;
        }

        $club->save();
        
        $mailData = [
            'title' => 'Events Moto',
            'body'  => 'Welcome To Events Moto You Recive An OTP Code please',
            'otp' => strval($otp)
        ];
        Mail::to($request->input('email'))->send(new SendOtp($mailData));
        session(['user_id' => $user_id, 'otp' => $otp]);
        return redirect("validation");
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
    public function update(Request $request, string $id)
    {
        $club = Club::findOrFail($id);
        $club->admin_name   = $request->input('admin_name');
        $club->club_name    = $request->input('club_name');
        $club->email        = $request->input('email');
        $club->indicatif    = $request->input('indicatif');       
        $club->phone        = $request->input('phone');
        $club->country      = $request->input('country');
        $club->city         = $request->input('city');
        $club->address      = $request->input('address');
        $club->description  = $request->input('description');
        if($request->hasFile('logo')){
            $destination = public_path('images/' . $club->logo);
            if(File::exists($destination)){
                File::delete($destination);
            }
            $file     = $request->file('logo');
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('/images'), $filename);
            $club->logo = $filename;
        }
        $club->save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Club $club)
    {
        //
    }
}
