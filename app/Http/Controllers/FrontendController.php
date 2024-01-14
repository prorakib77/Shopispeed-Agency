<?php

namespace App\Http\Controllers;

use App\Models\MembershipPlane;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        return view('frontend.index',[
            'memberships_plane' => MembershipPlane::all(),
        ]);
    }
    public function membership_details($plane_id){
        $plane = MembershipPlane::findOrFail($plane_id);
        return view('frontend.membership.membership_details', compact('plane'));
    }

    public function orderdetails(){
        return view('frontend.order.order_details');
    }
}
