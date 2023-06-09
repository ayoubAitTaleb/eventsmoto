<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Mail\SendOtp;
use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\RedirectResponse;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $companies = Company::all();
        return $companies;
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("company.createCompany");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request):RedirectResponse
    {
        $request->validate([
            'commercial_name'    => 'required|min:3|max:60',
            'company_name'       => 'required|min:3|max:60',
            'email'              => 'required|email|unique:users',
            'password'           => 'required|min:6|max:10',
            'indicatif'          => 'required',
            'phone'              => 'required|min:6|max:20',
            'country'            => 'required|min:2|max:30',
            'city'               => 'required|min:3|max:30',
            'address'            => 'required|min:2|max:100',
            'patente'            => 'required|min:2|max:20',
            'registre_commerce'  => 'required|min:2|max:30',
            'identifiant_fiscal' => 'required|min:2|max:30',
            'ice'                => 'required|min:6|max:30',
            'cnss'               => 'required|min:6|max:30',
            'description'        => 'max:500',
            'logo'               => 'required|mimes:jpg,bmp,png',
            'status'             => 'required|mimes:jpg,bmp,png,pdf'
        ]);
        $user = new User();
        $user->name     = $request->input('commercial_name');
		$user->email    = $request->input('email');
		$user->password = Hash::make($request->input('password'));

        if($request->file('logo')){
            $file        = $request->file('logo');
            $file_name   = date('YmdHi').$file->getClientOriginalName();
            $user->avatar = $file_name;
        }
        
        $user->type   = 1; // 1 = company
        $otp = mt_rand(111111,999999);
        $user->otp = $otp;
        $user->status = 0;
        $user->save();

        $user_id = DB::getPdo()->lastInsertId(); // collect last id registred on DB

        $company = new Company();
        $company->id_user           = $user_id;
        $company->commercial_name   = $request->input('commercial_name');
        $company->company_name      = $request->input('company_name');
        $company->email             = $request->input('email');
        $company->indicatif         = $request->input('indicatif');
        $company->phone             = $request->input('phone');
        $company->country           = $request->input('country');
        $company->city              = $request->input('city');
        $company->address           = $request->input('address');
        $company->description       = $request->input('description');
        $company->patente           = $request->input('patente');
        $company->registre_commerce = $request->input('registre_commerce');
        $company->identifiant_fiscal= $request->input('identifiant_fiscal');
        $company->ice               = $request->input('ice');
        $company->cnss              = $request->input('cnss');

        if($request->file('logo'))
        {
            $file = $request->file('logo');
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('/images'), $filename);
            $company->logo = $filename;
        }

        if($request->file('status'))
        {
            $file= $request->file('status');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('/images'), $filename);
            $company->status = $filename;
        }

        $company->save();
                
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
    public function show(Company $company)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Company $company)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $company = Company::findOrFail($id);
        $company->commercial_name   = $request->input('commercial_name');
        $company->company_name      = $request->input('company_name');
        $company->email             = $request->input('email');
        $company->indicatif         = $request->input('indicatif');
        $company->phone             = $request->input('phone');
        $company->country           = $request->input('country');
        $company->city              = $request->input('city');
        $company->address           = $request->input('address');
        $company->description       = $request->input('description');
        $company->patente           = $request->input('patente');
        $company->registre_commerce = $request->input('registre_commerce');
        $company->identifiant_fiscal= $request->input('identifiant_fiscal');
        $company->ice               = $request->input('ice');
        $company->cnss              = $request->input('cnss');
        $company->save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Company $company)
    {
        //
    }
}
