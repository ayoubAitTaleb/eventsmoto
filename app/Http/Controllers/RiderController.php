<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Mail\SendOtp;
use App\Models\Rider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class RiderController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        $riders = Rider::all();        
        return $riders;

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("rider.createRider");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'first_name'    => 'required|min:3|max:30',
            'family_name'   => 'required|min:3|max:30',
            'email'         => 'required|email|unique:users',
            'password'      => 'required|min:6|max:10',
            'indicatif'     => 'required',
            'phone'         => 'required|min:6|max:20',
            'country'       => 'required|min:2|max:30',
            'city'          => 'required|min:3|max:30',
            'address'       => 'required|min:3|max:100',
            'description'   => 'max:500',
            'brand'         => 'required',
            'moto_type'     => 'required',
            'photo'         => 'required|mimes:jpg,bmp,png'
        ]);
        
        $user = new User();
        $user->name     = $request->input('first_name');
        $user->email    = $request->input('email');
        $user->password = Hash::make($request->input('password'));

        if($request->file('photo'))
        {
            $file        = $request->file('photo');
            $file_name   = date('YmdHi').$file->getClientOriginalName();
            $user->avatar = $file_name;
        }

        $user->type = 3; // 3 = rider
        $otp = mt_rand(111111,999999);
        $user->otp = $otp;
        $user->status = 0;
        $user->save();
        
        $user_id = DB::getPdo()->lastInsertId(); // collect last id registred on DB

        $rider = new Rider();
        $rider->id_user     = $user_id;
        $rider->first_name  = $request->input('first_name');
        $rider->family_name = $request->input('family_name');
        $rider->email       = $request->input('email');
        $indicatif          = $request->input('indicatif');
        $rider->phone       = "(+".$indicatif.")".$request->input('phone');
        $rider->country     = $request->input('country');
        $rider->city        = $request->input('city');
        $rider->address     = $request->input('address');
        $rider->brand       = $request->input('brand');
        $rider->moto_type   = $request->input('moto_type');
        $rider->description = $request->input('description');

        if($request->file('photo'))
        {
            $file     = $request->file('photo');
            $file_name = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('/images'), $file_name);
            $rider->photo = $file_name;
        }

        $rider->save();

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
    public function show(string $id)
    {
        
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
