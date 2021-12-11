<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Image;
use App\Product;
use App\MegaMenues;
use App\Category;
use App\Banner;
use App\ProductsImage;
use App\ProductsAttribute;
use App\Coupon;
use App\HomeMenu;
use App\User;
use App\Gallery;
use App\YouMayLike;
use Auth;
use App\Address;
use App\Review;
use App\Wishlist;
use Session;
 use Cache;
class IndexController extends Controller
{
    //
    public function index(){
        $categories=Category::select("*")
                        ->where("Parent_id", "=", 0)
                        ->get();
        $menu1 = HomeMenu::where("menu_position", "=", 1)->get()->toArray();
        $menu2 = HomeMenu::where("menu_position", "=", 2)->get()->toArray();
        $menu3 = HomeMenu::where("menu_position", "=", 3)->get()->toArray();
        $menu4 = HomeMenu::where("menu_position", "=", 4)->get()->toArray();
        $menu5 = HomeMenu::where("menu_position", "=", 5)->get()->toArray();
        $gallery = Gallery::all();
       // print_r($menu5[0]['image']);die;
        return view('website.index',compact('categories','menu1','menu2','menu3','menu4','menu5','gallery'));
    }
    public function productListing(){
        $product=Product::all();
        $banner=Banner::all();
        
        return view('website.index2',compact('product','banner'));
    }
    
    public function productSingle(Request $request,$id){

        $productDetails = Product::with('attributes')->where('id',$id)->first();
        $couponDetails = Coupon::all();
        $reviewcount = Review::count();
        $review = Review::leftjoin('users','users.id', '=', 'product_reviews.user_id')->get();
        $categoryProduct = Product::where('category_id',$productDetails->category_id)->take(5)->get();
        $productDetails = json_decode(json_encode($productDetails));
        // echo "<pre>";print_r($productDetails);die;
         //Related Products Code
        $relatedProducts = Product::where('id','!=',$id)->where(['category_id'=>$productDetails->category_id])->get();

        // $relatedProducts = json_decode(json_encode($relatedProducts));
        // foreach($relatedProducts->chunk(3) as $chunk){
        //     foreach($chunk as $item){
        //         echo $item; echo"<br>";
        //     }
        //     echo "<br><br><br>";
        // }
        // die;
        // echo "<pre>";print_r($relatedProducts);die;

        //Display Categories or Sub Categories in left Sidebar of Home Page
        $categories = Category::with('categories')->where(['parent_id'=>0])->get();
        //Get products alternate images
        $productAltimages =ProductsImage::where('product_id',$id)->get();
        /*$productAltimages = json_decode(json_encode($productAltimages));
        echo "<pre>";print_r($productAltimages);die;*/
          
        $total_stock = ProductsAttribute:: where('product_id',$id)->sum('stock');

    
        return view('website.single_product',compact('productDetails','categories','productAltimages','total_stock','relatedProducts','categoryProduct','couponDetails','review','reviewcount'));
    }

    public function mega_menues(){
        $megamenues=MegaMenues::all();
        return view('layouts.header',compact('megamenues'));
    }
    public function userRegister(Request $request){
        if($request->isMethod('post')){
           
            $user['name']     =   $request->first_name.' '.$request->last_name;
            $user['email']   =   $request->email;
            $user['password'] =   bcrypt($request->password);
            User::create($user);
            return redirect()->back()->with('flash_message_success','User Registered successfully');
        }
        return view('website.user.register');
    }
    public function userLogin(Request $request){
        if($request->isMethod('post')){
            $data = $request->input();
            //dd($data);
            if(Auth::attempt(['email'=>$data['email'],'password'=>$data['password'],'admin'=>1])){
              return redirect('/user-account')->with('flash_message_success','Login successfully');
            }else{
              //echo "Failed"; die;
              return redirect('/user-login')->with('flash_message_error','Invalid Username or Password');
            }
         }
        return view('website.user.login');
    }
    public function userAccount(Request $request){

            $user=Auth::user();
            
            return view('website.user.useraccount',compact('user'));
    }
    public function updateUserAccount(Request $request){
            $id=Auth::user()->id;
            User::where('id',$id)->update(['name'=> $request->first_name.' '.$request->last_name,'email'=> $request->email,'mobile'=>$request->mobile,'password'=>bcrypt($request->password)]);
            return redirect()->back()->with('flash_message_success','user updated successfully');
    }
    public function userAddress(Request $request){
        $id=Auth::user()->id;
        $address=Address::where('user_id',$id)->get();
      return view('website.user.user_address',compact('address'));
       
    }
    public function updateUserAddressForm(Request $request){
        $addressid=$request->id;
        $id=Auth::user()->id;
        $address=Address::where(['user_id'=>$id,'id'=>$addressid])->first();
        return json_encode(array('message'=>'add successfully',
                        'data'=>$address
                ));
       }
    public function updateUserAddress(Request $request){
        //dd($request->all());
        $data['checkbox']=$request->checkbox1=='on'?1:0;
        Address::where('id',$request->editAddID)->update(['country'=>$request->country,'city'=>$request->city,'state'=>$request->state,'pincode'=>$request->pincode,'default'=>$data['checkbox']]);
        return redirect()->back()->with('flash_message_success','user address updated successfully');

    }
    public function deleteUserAddress(Request $request,$id){
        Address::where('id',$id)->delete();
        return redirect()->back()->with('flash_message_success','user address deleted successfully');
    }
    public function userWishlist(Request $request){
        $id=Auth::user()->id;
        $wishlistProduct=Product::leftjoin('wishlists','products.id','=','wishlists.product_id')->where('wishlists.user_id','=',$id)->where('wishlists.status',1)->get();
        return view('website.user.user_wishlist',compact('wishlistProduct'));
    }
    public function addWishlist(Request $request){
        $user_id=Auth::user()->id;
        $wishlist= Wishlist::where(['product_id'=>$request->id,'user_id'=>$user_id])->first();
        if($wishlist){
           if($wishlist->status==1){
            $wishlist=Wishlist::where(['product_id'=>$request->id,'user_id'=>$user_id])->update(['status'=>0]);
                 $totalWishlist=Wishlist::where(['status'=>1,'user_id'=>$user_id])->count();
                return json_encode(array('message'=>'add successfully','count'=>$totalWishlist
                ));
           }else{
            $wishlist=Wishlist::where(['product_id'=>$request->id,'user_id'=>$user_id])->update(['status'=>1]);
            $totalWishlist=Wishlist::where(['status'=>1,'user_id'=>$user_id])->count();
                return json_encode(array('message'=>'add successfully','count'=>$totalWishlist));
           }
        
        }else{
            $wishlist=new Wishlist();
            $wishlist->user_id    = $user_id;
            $wishlist->product_id = $request->id;
            $wishlist->save();
            $totalWishlist=Wishlist::where(['status'=>1,'user_id'=>$user_id])->count();
            return json_encode(array('message'=>'add successfully','count'=>$totalWishlist));
        }
    }
    public function removeWishlist(Request $request){
        $user_id=Auth::user()->id;
        $product_id=$request->id;
        $wishlist=Wishlist::where(['id'=>$product_id,'user_id'=>$user_id])->update(['status'=>0]);
        $totalWishlist=Wishlist::where(['status'=>1,'user_id'=>$user_id])->count();
        return json_encode(array('message'=>'remove successfully','count'=> $totalWishlist
                                )
                );
    }
    public function userLogout(){
        Auth::logout();
        Session::flush();
        Cache::flush();
        return redirect('/product-listing');
    }
     public function categories(){
        $categories = Category::where('parent_id',0)->get();
        $product=Product::all();
        $productCount=Product::count();
        return view('website.category',compact('categories','product','productCount'));
    }
    public function addReview(Request $request){

      if($request->isMethod('post')){
        if(Auth::user()){
       $data = $request->all();

       $review = new Review;
       $user_id=Auth::user()->id;
       $review->review = $data['customRadio'];
       $review->product_id = $data['product_id'];
       $review->user_id = $user_id;
       $review->description = $data['description'];
        //upload categories image code
        if($request->hasfile('image')){
            echo $image_tmp = $request->file('image');
            if($image_tmp->isValid()){
            //Image File Pat code
            $extension = $image_tmp->getClientOriginalExtension();
            $filename = rand(111,99999).'.'.$extension;
            $large_image_path = 'images/backend_img/review/'.$filename;
            //image resize code
            Image::make($image_tmp)->save($large_image_path);
            //Store img name in categories table
            $review->user_img = $filename; 
            }
        }
        
       $review->save();
       return redirect()->back();
     }
 }else{
    return redirect()->back();
 }
    }
  
}
