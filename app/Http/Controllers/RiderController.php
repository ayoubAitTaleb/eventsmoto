<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Rider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        $user = new User();
        $user->email = $request->input('email');
        $user->password = $request->input('password');
        $user->type = 0;
        $user->otp = 0;
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
        $rider->member      = $request->input('member');
        $rider->brand       = $request->input('brand');
        $rider->moto_type   = $request->input('moto_type');
        $rider->description = $request->input('description');        

        if($request->file('photo')){
            $file     = $request->file('photo');
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('public/Image'), $filename);
            $rider->photo = $filename;
        }

        $rider->save();
        return redirect()->route('riders.index');
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
