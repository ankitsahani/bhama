<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Promotion;
use Session;
use Image;
use DB;


class PromotionController extends Controller
{
    //function for add catogory
    public function addpromotionMenu(Request $request){
        if($request->isMethod('post')){
           $data = $request->all();
           //echo "<pre>"; print_r($data); die;
           
           $promotionmenu = new Promotion;
           $promotionmenu->name = $data['name'];
           $promotionmenu->description = $data['description'];
           
           $promotionmenu->save();
           return redirect('/admin/view-promotion-menu')->with('flash_message_success','Promotion Menu Added Successfully!!!');
        }
        //code for adding sub promotion_menu of parent promotion_menu
        return view('admin.promotion_menu.add_promotion_menu');
    }
    //function for view promotion
    public function viewpromotionMenu(){
        //Dynamically Display promotion From Database
        $promotionmenu = Promotion::get();
        return view('admin.promotion_menu.view_promotion_menu')->with(compact('promotionmenu'));
    }
    //function for edit promotion_menu
    public function editpromotionMenu(Request $request, $id = null){
        if($request->isMethod('post')){
            $data = $request->all();

            Promotion::where(['id'=>$id])->update(['name'=>$data['name'],'description'=>$data['description']]);
            return redirect('/admin/view-promotion-menu')->with('flash_message_success','Promotion Menu Updated Successfully!!!');
        }
        $menu = Promotion::where(['id'=>$id])->first();
        return view('admin.promotion_menu.edit_promotion_menu')->with(compact('menu'));
    }
    //function for delete promotion_menu
    public function deletepromotionMenu($id=null){
            if(!empty($id)){
                Promotion::where(['id'=>$id])->delete();
                return redirect()->back()->with('flash_message_error','Promotion Menu deleted Successfully!!!');

            }
    }
}
