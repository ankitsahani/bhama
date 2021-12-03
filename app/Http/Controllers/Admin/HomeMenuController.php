<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\HomeMenu;
use Session;
use Image;
use DB;

class HomeMenuController extends Controller
{
   //function for add catogory
    public function addHomeMenu(Request $request){
        if($request->isMethod('post')){
           $data = $request->all();
           //echo "<pre>"; print_r($data); die;
           
           $homemenu = new HomeMenu;
           $homemenu->menu_position = $data['menu_position'];
           $homemenu->link = $data['link'];
            //upload home_menu image code
            if($request->hasfile('image')){
                echo $image_tmp = $request->file('image');
                if($image_tmp->isValid()){
                //Image File Pat code
                $extension = $image_tmp->getClientOriginalExtension();
                $filename = rand(111,99999).'.'.$extension;
                $large_image_path = 'images/backend_img/homemenu/large/'.$filename;
                $small_image_path = 'images/backend_img/homemenu/small/'.$filename;
                $medium_image_path = 'images/backend_img/homemenu/medium/'.$filename;
                //image resize code
                Image::make($image_tmp)->save($large_image_path);
                Image::make($image_tmp)->resize(300,300)->save($small_image_path);
                Image::make($image_tmp)->resize(600,600)->save($medium_image_path);
                //Store img name in home_menu table
                $homemenu->image = $filename; 
                }
            }
            //dd($homemenu);
           $homemenu->save();
           return redirect('/admin/view-home-menu')->with('flash_message_success','Home Menu Added Successfully!!!');
        }
        //code for adding sub home_menu of parent home_menu
        return view('admin.home_menu.add_home_menu');
    }
    //function for view HomeMenu
    public function viewHomeMenu(){
        //Dynamically Display HomeMenu From Database
        $homemenu = HomeMenu::get();
        return view('admin.home_menu.view_home_menu')->with(compact('homemenu'));
    }
    //function for edit home_menu
    public function editHomeMenu(Request $request, $id = null){
        if($request->isMethod('post')){
            $data = $request->all();
              if($request->hasFile('image')){
                $image_tmp = $request->file('image');
                if($image_tmp->isValid()){
                //Image File Path code
                $extension = $image_tmp->getClientOriginalExtension();
                $filename = rand(111,99999).'.'.$extension;
                $large_image_path = 'images/backend_img/home_menu/large/'.$filename;
                $small_image_path = 'images/backend_img/home_menu/small/'.$filename;
                $medium_image_path = 'images/backend_img/home_menu/medium/'.$filename;
                //image resize code
                Image::make($image_tmp)->save($large_image_path);
                Image::make($image_tmp)->resize(300,300)->save($small_image_path);
                Image::make($image_tmp)->resize(600,600)->save($medium_image_path); 
                }
            }else{
                $filename = $data['current_image']; 
            }

            HomeMenu::where(['id'=>$id])->update(['menu_position'=>$data['menu_position'],'link'=>$data['link'],'image'=>$filename]);
            return redirect('/admin/view-home-menu')->with('flash_message_success','HomeMenu Updated Successfully!!!');
        }
        $menu = HomeMenu::where(['id'=>$id])->first();
        return view('admin.home_menu.edit_home_menu')->with(compact('menu'));
    }
    //function for delete home_menu
    public function deleteHomeMenu($id=null){
            if(!empty($id)){
                HomeMenu::where(['id'=>$id])->delete();
                return redirect()->back()->with('flash_message_error','Home Menu deleted Successfully!!!');

            }
    }
}
