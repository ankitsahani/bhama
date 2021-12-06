<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Order;
use Auth;
use Str;
class RazorpayController extends Controller
{
    //
   
    public function razorPaySuccess(Request $Request){
       
        $arr = array('msg' => 'Payment successfully credited', 'status' => true);
        return Response()->json($arr);    
    }
    public function RazorThankYou()
    {
        $carts = \Cart::content();
        foreach($carts as $cart){
            $order=new Order();
            $order->user_id=Auth::user()->id;
            $order->product_id=$cart->id;
            $order->order_number=mt_rand(99,99999);
            $order->order_status="In Process";
            $order->grand_total=$cart->qty*$cart->price;
            $order->save();
        }
        return view('website.thankyou');
    }
}
