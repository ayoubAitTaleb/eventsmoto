<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Media;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        $user = new User();
        $user->email    = $request->input('email');
        $user->password = $request->input('password');
        $user->type     = 0;
        $user->otp      = 0;
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

        if($request->file('logo')){
            $file     = $request->file('logo');
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('public/Image'), $filename);
            $media->logo = $filename;
        }

        if($request->file('card_front')){
            $file     = $request->file('card_front');
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('public/Image'), $filename);
            $media->card_front = $filename;
        }

        if($request->file('card_back')){
            $file     = $request->file('card_back');
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('public/Image'), $filename);
            $media->card_back = $filename;
        }

        $media->save();
        return redirect()->route('medias.index');
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
