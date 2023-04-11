<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Mail\SendOtp;
use App\Models\Media;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class MediaController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        $medias = Media::all();
        return $medias;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("media.createMedia");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'admin_name'    => 'required|min:3|max:60',
            'media_name'    => 'required|min:3|max:60',
            'email'         => 'required|email|unique:users',
            'password'      => 'required|min:6|max:10',
            'indicatif'     => 'required',
            'phone'         => 'required|min:6|max:20',
            'country'       => 'required|min:2|max:30',
            'city'          => 'required|min:3|max:30',
            'address'       => 'required|min:6|max:100',
            'social_reason' => 'required|min:2|max:10',
            'description'   => 'max:500',
            'logo'          => 'required|mimes:jpg,bmp,png',
            'card_front'    => 'required|mimes:jpg,bmp,png',
            'card_back'     => 'required|mimes:jpg,bmp,png'
        ]);
        $user = new User();
        $user->name     = $request->input('admin_name');
        $user->email    = $request->input('email');
        $user->password = Hash::make($request->input('password'));
        if($request->file('logo')){
            $file        = $request->file('logo');
            $file_name   = date('YmdHi').$file->getClientOriginalName();
            $user->avatar = $file_name;
        }
        $user->type     = 2; // 3 = media
        $otp = mt_rand(111111,999999);
        $user->otp = $otp;
        $user->status   = 0;
        $user->save();

        $user_id = DB::getPdo()->lastInsertId(); // collect last id registred on DB

        $media = new Media();
        $media->id_user     = $user_id;
        $media->admin_name  = $request->input('admin_name');
        $media->media_name  = $request->input('media_name');
        $media->email       = $request->input('email');
        $indicatif          = $request->input('indicatif');        
        $media->phone       = "(+".$indicatif.")".$request->input('phone');
        $media->social_reason=$request->input('social_reason');
        $media->country     = $request->input('country');
        $media->city        = $request->input('city');
        $media->address     = $request->input('address');
        $media->description = $request->input('description');
        $media->logo        = $request->input('logo');
        $media->card_front  = $request->input('card_front');        
        $media->card_back   = $request->input('card_back');        

        if($request->file('logo'))
        {
            $file     = $request->file('logo');
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('/images'), $filename);
            $media->logo = $filename;
        }

        if($request->file('card_front'))
        {
            $file     = $request->file('card_front');
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('/images'), $filename);
            $media->card_front = $filename;
        }

        if($request->file('card_back'))
        {
            $file     = $request->file('card_back');
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('/images'), $filename);
            $media->card_back = $filename;
        }

        $media->save();
        
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
