<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Gallery;
use Session;
use Image;
use DB;


class GalleryController extends Controller
{
    //function for add catogory
    public function addgalleryMenu(Request $request){
        if($request->isMethod('post')){
           $data = $request->all();
           //echo "<pre>"; print_r($data); die;
           
           $gallerymenu = new Gallery;
           $gallerymenu->name = $data['name'];
           $gallerymenu->description = $data['description'];
            //upload gallery_menu image code
            if($request->hasfile('image')){
                echo $image_tmp = Input::file('image');
                if($image_tmp->isValid()){
                //Image File Pat code
                $extension = $image_tmp->getClientOriginalExtension();
                $filename = rand(111,99999).'.'.$extension;
                $large_image_path = 'images/backend_img/gallerymenu/large/'.$filename;
                $small_image_path = 'images/backend_img/gallerymenu/small/'.$filename;
                $medium_image_path = 'images/backend_img/gallerymenu/medium/'.$filename;
                //image resize code
                Image::make($image_tmp)->save($large_image_path);
                Image::make($image_tmp)->resize(300,300)->save($small_image_path);
                Image::make($image_tmp)->resize(600,600)->save($medium_image_path);
                //Store img name in gallery_menu table
                $gallerymenu->image = $filename; 
                }
            }
            //dd($gallerymenu);
           $gallerymenu->save();
           return redirect('/admin/view-gallery-menu')->with('flash_message_success','Gallery Menu Added Successfully!!!');
        }
        //code for adding sub gallery_menu of parent gallery_menu
        return view('admin.gallery_menu.add_gallery_menu');
    }
    //function for view Gallery
    public function viewgalleryMenu(){
        //Dynamically Display Gallery From Database
        $gallerymenu = Gallery::get();
        return view('admin.gallery_menu.view_gallery_menu')->with(compact('gallerymenu'));
    }
    //function for edit gallery_menu
    public function editgalleryMenu(Request $request, $id = null){
        if($request->isMethod('post')){
            $data = $request->all();
              if($request->hasFile('image')){
                $image_tmp = Input::file('image');
                if($image_tmp->isValid()){
                //Image File Path code
                $extension = $image_tmp->getClientOriginalExtension();
                $filename = rand(111,99999).'.'.$extension;
                $large_image_path = 'images/backend_img/gallerymenu/large/'.$filename;
                $small_image_path = 'images/backend_img/gallerymenu/small/'.$filename;
                $medium_image_path = 'images/backend_img/gallerymenu/medium/'.$filename;
                //image resize code
                Image::make($image_tmp)->save($large_image_path);
                Image::make($image_tmp)->resize(300,300)->save($small_image_path);
                Image::make($image_tmp)->resize(600,600)->save($medium_image_path); 
                }
            }else{
                $filename = $data['current_image']; 
            }

            Gallery::where(['id'=>$id])->update(['name'=>$data['name'],'description'=>$data['description'],'image'=>$filename]);
            return redirect('/admin/view-gallery-menu')->with('flash_message_success','Gallery Menu Updated Successfully!!!');
        }
        $menu = Gallery::where(['id'=>$id])->first();
        return view('admin.gallery_menu.edit_gallery_menu')->with(compact('menu'));
    }
    //function for delete gallery_menu
    public function deletegalleryMenu($id=null){
            if(!empty($id)){
                Gallery::where(['id'=>$id])->delete();
                return redirect()->back()->with('flash_message_error','Gallery Menu deleted Successfully!!!');

            }
    }
}
