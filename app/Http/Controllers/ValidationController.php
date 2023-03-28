<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ValidationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("loginForms.checkOtpForm");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $user_id)
    {
        $user = User::findOrFail($user_id);
        return $user;
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
    public function update(Request $request, string $user_id)
    {
        $user_id = session('user_id');
        $otp     = session('otp');
        $user = User::findOrFail($user_id);
        
        if($request->otp == $otp && $user->otp == $otp)
        {
            $user->status = 1;
            $user->save();
            return redirect('/');
        }
        else 
        {
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
