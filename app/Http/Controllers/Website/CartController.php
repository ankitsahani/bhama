<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;
class CartController extends Controller
{
    public function cart(){
        
      $cart=\Cart::content();

// dd($cart);
     
        return view('website.cart',compact('cart'));
    }
    public function addToCart(Request $request){
       
        $product=Product::where('id',$request->id)->first();
    // dd($request->all());
       \Cart::add([
            'id' =>   $request->id,
            'name' => $product->product_name,
            'qty' =>  $request->qty, 
            'price' => $product->selling_price,
            'weight' => 550,
            'options' => ['image'=>$product->image,'selling_price'=>$product->price,'size' =>$request->size]]);
             $count=\Cart::count();
             $priceTotal=\Cart::priceTotal();
             $cart = \Cart::content();
             $returnHTml = view('website.ajax.cart_add_result', compact('cart'))->render();
                echo json_encode(array(
                    'message'=>'Cart added Successfully',
                    'cartData'=>$returnHTml,
                    'count'=>$count,
                    'price'=> $priceTotal,
                ));
           
    }
    public function removeCart(Request $request){
        \Cart::remove($request->update_id);
        $cart = \Cart::content();
       // dd($cartItems);
        $returnHTml = view('website.ajax.cart_remove_result',compact('cart'))->render();
        $count=\Cart::count();
        $priceTotal=\Cart::priceTotal();
        echo json_encode(array(
            'message'=>'Cart removed Successfully',
            'cartData'=>$returnHTml,
            'count'=>$count,
            'price'=> $priceTotal,
        ));
    }
   
}
