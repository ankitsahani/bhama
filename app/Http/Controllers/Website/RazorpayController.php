<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Order;
use Auth;
use Str;
use App\Invoice;
use App\Cart;
class RazorpayController extends Controller
{
    //
   
    public function razorPaySuccess(Request $Request){
       
        $arr = array('msg' => 'Payment successfully credited', 'status' => true);
        return Response()->json($arr);    
    }
    public function RazorThankYou()
    {
        $order=new Order();
        $order->user_id=Auth::user()->id;
        $order->order_number=mt_rand(99,99999);
        $order->order_status="In Process";
        $order->grand_total=\Cart::priceTotal();
        if($order->save()){
        
        $carts = \Cart::content();
        foreach($carts as $cart){
           
            $invoice=new Invoice();
            $invoice->user_id=Auth::user()->id;
            $invoice->product_id=$cart->id;
            $invoice->order_id= $order->id;
            $invoice->invoice_number=mt_rand(99,99999);
            $invoice->grand_total=$cart->qty*$cart->price;
            $invoice->price=$cart->price;
            $invoice->qty=$cart->qty;
            $invoice->save();
            \Cart::remove($cart->rowId);
            Cart::where('user_id',Auth::user()->id)->where('cart_id',$cart->rowId)->delete();
        }
    }

        return view('website.thankyou');
    }
}
