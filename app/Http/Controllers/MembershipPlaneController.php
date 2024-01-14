<?php

namespace App\Http\Controllers;

use App\Models\MembershipPlane;
use Illuminate\Http\Request;

class MembershipPlaneController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.membership.index',[
            'memberships_plane' => MembershipPlane::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.membership.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'plane_name' =>'required',
            'plane_price' =>'required',
            'plane_description' =>'required',
        ]);
        MembershipPlane::create([
            'plane_name' => $request->plane_name,
            'plane_price' => $request->plane_price,
            'plane_discount' => $request->plane_discount,
            'plane_description' => $request->plane_description,
        ]);
        return redirect()->route('membership.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(MembershipPlane $membershipPlane)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(MembershipPlane $membershipPlane)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, MembershipPlane $membershipPlane)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MembershipPlane $membershipPlane)
    {
        $membershipPlane->delete();
    }
}
