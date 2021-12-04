<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;
class CartController extends Controller
{
    public function cart(){
        
      $cart=\Cart::content();
     dd($cart);
     
        return view('website.cart',compact('cart'));
    }
    public function addToCart(Request $request){
       
        $product=Product::find($request->id);
     // dd($request->all());
       \Cart::add([
            'id' =>   $request->id,
            'name' => $product->product_name,
            'qty' =>  $request->qty, 
            'price' => $product->price,
            'weight' => 550,
            'options' => ['image'=>$product->image,'selling_price'=>$product->selling_price,'size' =>$request->size]]);
        //  dd(\Cart::content());
           // \Cart::remove('5b9865a287421917623bdcf99f7de904');
            //\Cart::remove('5b9865a287421917623bdcf99f7de904');
    }
    public function updateCart(){

    }
   
}
