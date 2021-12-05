<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RazorpayController extends Controller
{
    //
   
    public function razorPaySuccess(Request $Request){
        
        $arr = array('msg' => 'Payment successfully credited', 'status' => true);
        return Response()->json($arr);    
    }
    public function RazorThankYou()
    {
        return view('website.thankyou');
    }
}
