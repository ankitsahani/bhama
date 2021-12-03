<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Category;
use App\MegaMenues;
use Image;

class CategoryController extends Controller
{
    //function for add catogory
    public function addCategory(Request $request){
        if($request->isMethod('post')){
           $data = $request->all();
           //echo "<pre>"; print_r($data); die;
           
           $category = new Category;
           $category->name = $data['category_name'];
           $category->Parent_id = $data['Parent_id'];
           $category->description = $data['description'];
           $category->url = $data['url'];
            //upload categories image code
            if($request->hasfile('image')){
                echo $image_tmp = $request->file('image');
                if($image_tmp->isValid()){
                //Image File Pat code
                $extension = $image_tmp->getClientOriginalExtension();
                $filename = rand(111,99999).'.'.$extension;
                $large_image_path = 'images/backend_img/categories/large/'.$filename;
                $small_image_path = 'images/backend_img/categories/small/'.$filename;
                $medium_image_path = 'images/backend_img/categories/medium/'.$filename;
                //image resize code
                Image::make($image_tmp)->save($large_image_path);
                Image::make($image_tmp)->resize(300,300)->save($small_image_path);
                Image::make($image_tmp)->resize(600,600)->save($medium_image_path);
                //Store img name in categories table
                $category->image = $filename; 
                }
            }
            //dd($category);
           $category->save();
           return redirect('/admin/view-categories')->with('flash_message_success','Category Added Successfully!!!');
        }
        //code for adding sub categories of parent category
        $levels = Category::where(['Parent_id'=>0])->get();
        return view('admin.categories.add_category')->with(compact('levels'));
    }
    //function for view categories
    public function viewCategories(){
        //Dynamically Display Categories From Database
        $categories = Category::get();
           return view('admin.categories.view_categories')->with(compact('categories'));
    }
    //function for edit category
    public function editCategory(Request $request, $id = null){
        if($request->isMethod('post')){
            $data = $request->all();
              if($request->hasFile('image')){
                $image_tmp = $request->file('image');
                if($image_tmp->isValid()){
                //Image File Path code
                $extension = $image_tmp->getClientOriginalExtension();
                $filename = rand(111,99999).'.'.$extension;
                $large_image_path = 'images/backend_img/categories/large/'.$filename;
                $small_image_path = 'images/backend_img/categories/small/'.$filename;
                $medium_image_path = 'images/backend_img/categories/medium/'.$filename;
                //image resize code
                Image::make($image_tmp)->save($large_image_path);
                Image::make($image_tmp)->resize(300,300)->save($small_image_path);
                Image::make($image_tmp)->resize(600,600)->save($medium_image_path); 
                }
            }else{
                $filename = $data['current_image']; 
            }

            Category::where(['id'=>$id])->update(['name'=>$data['category_name'],'description'=>$data['description'],'image'=>$filename,'url'=>$data['url']]);
            return redirect('/admin/view-categories')->with('flash_message_success','Category Updated Successfully!!!');
        }
        $categoryDetails = Category::where(['id'=>$id])->first();
        $levels = Category::where(['Parent_id'=>0])->get();
        return view('admin.categories.edit_category')->with(compact('categoryDetails','levels'));
    }
    //function for delete category
    public function deleteCategory($id=null){
            if(!empty($id)){
                Category::where(['id'=>$id])->delete();
                return redirect()->back()->with('flash_message_error','Category deleted Successfully!!!');

            }
    }
     //function for add mega menues
    public function addMegamenu(Request $request){
        if($request->isMethod('post')){
           $data = $request->all();
         // echo "<pre>"; print_r($data); die;
           
           $category = new MegaMenues;
           $category->name = $data['name'];
           $category->parent_id = $data['parent_id'];
           $category->description = $data['description'];
            //upload mega_menu image code
           $category->save();
           //categories drop down end
           return redirect('/admin/view-mega-menu')->with('flash_message_success','Mega Menu Added Successfully!!!');
        }
        $categories = MegaMenues::where(['parent_id'=>0])->get();
        $levels = "<option value='0' selected >Main Mega Menu</option>";
        foreach($categories as $cat){
            $levels .= "<option value='".$cat->id."'>".$cat->name."</option>";
        //code for showing subcategories in main category
            $sub_categories = MegaMenues::where(['parent_id'=>$cat->id])->get();
            foreach($sub_categories as $sub_cat){
                $levels .= "<option value = '".$sub_cat->id."'>&nbsp;--&nbsp;".$sub_cat->name."</option>";
            }
        }
        //dd($levels);
        //code for adding sub mega_menu of parent category
        //$levels = MegaMenues::where(['parent_id'=>0])->get();
        return view('admin.mega-menu.add_mega_menu')->with(compact('levels'));
    }
    //function for view mega_menu
    public function viewMegamenu(){
        //Dynamically Display Categories From Database
        $megamenues = MegaMenues::get();
           return view('admin.mega-menu.view_mega_menu')->with(compact('megamenues'));
    }
    //function for edit category
    public function editMegamenu(Request $request, $id = null){
        if($request->isMethod('post')){
            $data = $request->all();
            // echo "<pre>"; print_r($data); die;
            MegaMenues::where(['id'=>$id])->update(['name'=>$data['menu_name'],'description'=>$data['description']]);
            return redirect('/admin/view-mega-menu')->with('flash_message_success','Mega Menu Updated Successfully!!!');
        }
        $megamenuDetails = MegaMenues::where(['id'=>$id])->first();
         $categories = MegaMenues::where(['parent_id'=>0])->get();
        $levels = "<option value='' selected disabled>Main Mega Menu</option>";
        foreach($categories as $cat){
            $levels .= "<option value='".$cat->id."'>".$cat->name."</option>";
        //code for showing subcategories in main category
            $sub_categories = MegaMenues::where(['parent_id'=>$cat->id])->get();
            foreach($sub_categories as $sub_cat){
                $levels .= "<option value = '".$sub_cat->id."'>&nbsp;--&nbsp;".$sub_cat->name."</option>";
            }
        }
        return view('admin.mega-menu.edit_mega_menu')->with(compact('megamenuDetails','levels'));
    }
    //function for delete megamenu
    public function deleteMegamenu($id=null){
            if(!empty($id)){
                MegaMenues::where(['id'=>$id])->delete();
                return redirect()->back()->with('flash_message_error','Mega Menu deleted Successfully!!!');

            }
    }
}
