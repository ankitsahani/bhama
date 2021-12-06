<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Order;
class OrderController extends Controller
{
    //
    public function orderHistory(){
        $id=Auth::user()->id;
        $orders=Order::where('user_id',$id)->where('history_status',1)->get();
        return view('website.order_history',compact('orders'));
    }
    public function clearOrderHistory(){
        $id=Auth::user()->id;
        Order::where('user_id',$id)->where('history_status',1)->update(['history_status'=>0]);
        return redirect()->back();
    }
    public function invoiceHistory(){
        $id=Auth::user()->id;
        $invoices=Order::leftjoin('invoices','invoices.order_id','=','orders.id')->where('orders.user_id',$id)->where('orders.history_status',1)->get();
        dd($invoices);
        return view('website.invoice_history',compact('invoices'));
    }
}
