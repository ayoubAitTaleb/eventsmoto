<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $members_requests = Member::where('club', Auth::user()->club->club_name)->where('approved', false)->get();
        return view('dashboard.request', ['members_requests' => $members_requests]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() 
    {
        $members = Member::where('club', Auth::user()->club->club_name)->where('approved', true)->get();
        return view('dashboard.allMembers', ['members' => $members]);

    }
    
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $member = new Member();
        $member->club = $request->input('club');
        $member->rider_id = Auth::user()->rider->id;
        $member->save();
        return redirect('dashboard');
    }
    
    /**
     * Display the specified resource.
     */
    public function show()
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
        $member = Member::findOrFail($id);
        $member->approved = $request->input("approved");
        $member->club = $request->input("club");
        $member->save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $member = Member::findOrFail($id);
        $member->delete();
        return redirect()->back();
    }
}
