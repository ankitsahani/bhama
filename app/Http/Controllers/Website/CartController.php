<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;
use App\Cart;
use Auth;
use App\Coupon;
use DB;
class CartController extends Controller
{
    public function cart(){
        
        $cart=\Cart::content();
        return view('website.cart',compact('cart'));
    }
    public function addToCart(Request $request){
       
        $product=Product::where('id',$request->id)->first();
        // dd($request->all());
       $cartAdd=\Cart::add([
            'id' =>   $request->id,
            'name' => $product->product_name,
            'qty' =>  $request->qty, 
            'price' => $product->selling_price,
            'weight' => 550,
            'options' => ['image'=>$product->image,'selling_price'=>$product->price,'size' =>$request->size]]);
           
            

            $data['product_id']=$request->id;
            $data['user_id']=Auth::user()->id;
            $data['cart_id']=$cartAdd->rowId;
            $data['qty']=$request->qty;
            $data['selling_price']=$product->selling_price;
            $data['price']=$product->price;
            $data['size']=$request->size;
            $data['grand_total']=$request->qty*$product->selling_price;
           

            $cart=\Cart::content();
            foreach($cart as $row){
                $cartData=Cart::where('cart_id',$row->rowId)->first();
                if($cartData){
                    Cart::where('cart_id',$row->rowId)->update(['qty'=>$request->qty+1]);
                }else{
                    Cart::create($data);
                }
            }


             $count=Cart::count();
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
    public function updateCart(Request $request){
        $cartData=\Cart::update($request->update_id, ['qty' => $request->quantity]);
        $cart = \Cart::content();
        $returnHTml = view('website.ajax.cart_update_result', compact('cart'))->render();

        $count=\Cart::count();
        $priceTotal=\Cart::priceTotal();
        echo json_encode(array(
            
            'html'=>$returnHTml,
            'count'=>$count,
            'price'=>$priceTotal,
            'message'=>'Cart Updated Successfully'
        ));
       
        // \Cart::update($request->update_id, ['qty' =>$request->qty]);
        // Cart::where('cart_id',$request->update_id)->update(['qty'=>$request->qty,'grand_total'=>$request->qty*$request->selling_price]);
        // $cart = \Cart::content();
        // $priceTotal=\Cart::priceTotal();
        // echo json_encode(array(
        //     'message'=>'Cart removed Successfully',
        //     'cartData'=>$returnHTml,
        //     'count'=>$count,
        //     'price'=> $priceTotal,
        // ));
    }
    public function removeCart(Request $request){
        \Cart::remove($request->update_id);
        Cart::where('cart_id',$request->update_id)->delete();
        $cart = \Cart::content();
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
    public function clearCart(Request $request){

        \Cart::destroy();
        Cart::where('user_id',Auth::user()->id)->delete();
        return redirect()->back();
    }
    public function ApplyCoupon(Request $request){
       
        $data = $request->all();
       //echo"<pre>";print_r($data);die;
        $couponCount = Coupon::where('coupon_code',$data['coupon_code'])->count();
        if($couponCount == 0){
            return redirect()->back()->with('flash_message_error','Coupon does not Exists!');
        }else{
            
           //Get Coupon Details
           $couponDetails = Coupon::where('coupon_code',$data['coupon_code'])->first();
           //if coupon is valid
          
           if($couponDetails->status== 0){
             return redirect()->back()->with('flash_message_error','This Coupon is not active!');
           }
           //if coupon is expired
           $expiry_date = $couponDetails->expiry_date;
           $current_date = date('Y-m-d');
            if($expiry_date < $current_date){
                return redirect()->back()->with('flash_message_error','This Coupon is Expired!');
            }
          
           if(Auth::check()){
            $user_id = Auth::user()->id;
            $userCart = DB::table('cart')->where(['user_id'=>$user_id])->get();
            }
            $total_amount = 0;
            foreach($userCart as $item){
                $total_amount = $total_amount + ($item->selling_price * $item->qty);
                if($couponDetails->amount_type=="Fixed"){
                    $couponAmount = $couponDetails->amount;
                }else{
                    $couponAmount = $total_amount * ($couponDetails->amount/100);
                }
                //dd($item);
                Cart::where(['id'=>$item->id,'user_id'=>$user_id])->update(['coupon_price'=> $couponAmount]);
            }
           //Check if amount type is fixed or percentage
          
            return redirect()->back()->with('flash_message_success','Coupon Code is successfully applied.You are availing discount!');
       }
    }
  
   
}
