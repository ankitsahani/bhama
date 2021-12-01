<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;
use App\MegaMenues;
use App\Category;
use App\Banner;
use App\ProductsImage;
use App\ProductsAttribute;
use App\Coupon;
use App\HomeMenu;

class IndexController extends Controller
{
    //
    public function index(){
        $categories=Category::select("*")
                        ->where("Parent_id", "=", 0)
                        ->get();
        $menu1 = HomeMenu::where("menu_position", "=", 1)->get()->toArray();;
        $menu2 = HomeMenu::where("menu_position", "=", 2)->get()->toArray();;
        $menu3 = HomeMenu::where("menu_position", "=", 3)->get()->toArray();;
        $menu4 = HomeMenu::where("menu_position", "=", 4)->get()->toArray();;
        $menu5 = HomeMenu::where("menu_position", "=", 5)->get()->toArray();;
       // print_r($menu5[0]['image']);die;
        return view('website.index',compact('categories','menu1','menu2','menu3','menu4','menu5'));
    }
    public function productListing(){
        $product=Product::all();
        $banner=Banner::all();
        return view('website.index2',compact('product','banner'));
    }
    
    public function productSingle(Request $request,$id){
        $productDetails = Product::with('attributes')->where('id',$id)->first();
        $couponDetails = Coupon::all();
        $categoryProduct = Product::where('category_id',$productDetails->category_id)->take(3)->get();
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

       
    
        return view('website.single_product',compact('productDetails','categories','productAltimages','total_stock','relatedProducts','categoryProduct','couponDetails'));
    }

    public function mega_menues(){
        $megamenues=MegaMenues::all();
        return view('layouts.header',compact('megamenues'));
    }
  
}
