<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

        $company = new Company();
        $company->id_user           = $user_id;
        $company->commercial_name   = $request->input('commercial_name');
        $company->company_name      = $request->input('company_name');
        $company->email             = $request->input('email');
        $indicatif                  = $request->input('indicatif');
        $company->phone             = "(+".$indicatif.")".$request->input('phone');
        $company->country           = $request->input('country');
        $company->city              = $request->input('city');
        $company->address           = $request->input('address');
        $company->description       = $request->input('description');
        $company->patente           = $request->input('patente');
        $company->registre_commerce = $request->input('registre_commerce');
        $company->identifiant_fiscal= $request->input('identifiant_fiscal');
        $company->ice               = $request->input('ice');
        $company->cnss              = $request->input('cnss');

        if($request->file('logo')){
            $file= $request->file('logo');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('public/Image'), $filename);
            $company->logo = $filename;
        }

        if($request->file('status')){
            $file= $request->file('status');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('public/Image'), $filename);
            $company->status = $filename;
        }

        $company->save();
        return redirect()->route('companies.index');
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
    public function update(Request $request, Company $company)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Company $company)
    {
        //
    }
}
