<?php

namespace App\Http\Controllers;

use App\Models\Billing;
use App\Models\MembershipPlane;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
class BillingController extends Controller
{
    public function billing($plane_id){
        $plane = MembershipPlane::find($plane_id);
        return view('frontend.membership.billing', compact('plane'));
    }

    public function all_billing(Request $request){
        $request->validate([
            'plane_duration'=> 'required',
            'username'=> 'required',
            'plane_email'=> 'required|email',
            'plane_phone'=> 'numeric|min:2',
        ]);
        $plane_key = Str::random(20).time();
        Billing::create([
            'plane_duration' => $request->plane_duration,
            'username' => $request->username,
            'plane_email' => $request->plane_email,
            'plane_phone' => $request->plane_phone,
            'plane_phone' => $request->plane_phone,
            'plane_website' => $request->plane_website,
            'plane_key' => $plane_key,
            'plane_type' => $request->plane_type,
            'plane_details' => $request->plane_details,
        ]);
        return redirect()->route('orderdetails');
    }

    public function key_confirmation(Request $request, Billing $billing){

        $request->validate([
            'plane_key' => 'required',
        ]);
        $key = Billing::where('plane_key', $request->plane_key)->first();
        if ($key) {
            return view('frontend.order.orders',[
                'billing' => $key,
            ]);
        } else {
            return redirect()->route('orderdetails');
        }

        // return view('frontend.membership.key_confirmation', compact('billing'));
        // $billing = Billing::where('plane_key', $request->plane_key)->first();
        // if ($billing) {
        //     return view('frontend.membership.key_confirmation', compact('billing'));
        // }
        // if () {
        //     # code...
        // }
    }
}
