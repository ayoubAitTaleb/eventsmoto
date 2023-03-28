<?php

namespace App\Http\Controllers;

use App\Models\Club;
use App\Models\User;
use App\Mail\SendOtp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use PhpParser\Node\Stmt\Echo_;

class ClubController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clubs = Club::all();
        // return $clubs;
        return view('club.listClub');
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
            'email'         => 'required|email',
            'indicatif'     => 'required',
            'phone'         => 'required|min:6|max:20',
            'country'       => 'required|min:2|max:30',
            'city'          => 'required|min:2|max:30',
            'address'       => 'required|min:2|max:100',
            'logo'          => 'required|mimes:jpg,bmp,png',
            'rec_def'       => 'required|mimes:jpg,bmp,png'
        ]);

        $user = new User();
        $user->name     = $request->input('admin_name');

        if($request->input('email') == $request->input('email_confirm'))
		{
            $user->email    = $request->input('email');
        } else 
		{
            return Redirect::back()->withErrors(['msg' => 'email not match']);
        } 
		if($request->input('password') == $request->input('password_confirm'))
		{
			$user->password = $request->input('password');
		} else 
        {
            return Redirect::back()->withErrors(['msg' => 'password not match']);
        } 

        if($request->file('logo'))
		{
            $file        = $request->file('logo');
            $file_name   = date('YmdHi').$file->getClientOriginalName();
            $user->image = $file_name;
        }

        $user->type = 0;
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
        $indicatif          = $request->input('indicatif');        
        $club->phone        = "(+".$indicatif.")".$request->input('phone');
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
