<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\FooterPages;
class FooterPagesController extends Controller
{
     //function for add Pagees
    public function addPages(Request $request){
        if($request->isMethod('post')){
           $data = $request->all();
         // echo "<pre>"; print_r($data); die;
           
           $category = new FooterPages;
           $category->name = $data['page_name'];
           $category->parent_id = $data['parent_id'];
           $category->description = $data['description'];
            //upload mega_menu image code
           $category->save();
           //categories drop down end
           return redirect('/admin/view-pages')->with('flash_message_success','Page Added Successfully!!!');
        }
        $categories = FooterPages::where(['parent_id'=>0])->get();
        $levels = "<option value='0' selected >Main Page</option>";
        foreach($categories as $cat){
            $levels .= "<option value='".$cat->id."'>".$cat->name."</option>";
        //code for showing subcategories in main category
            $sub_categories = FooterPages::where(['parent_id'=>$cat->id])->get();
            foreach($sub_categories as $sub_cat){
                $levels .= "<option value = '".$sub_cat->id."'>&nbsp;--&nbsp;".$sub_cat->name."</option>";
            }
        }
        //dd($levels);
        //code for adding sub mega_menu of parent category
        //$levels = Pageses::where(['parent_id'=>0])->get();
        return view('admin.footer_pages.add_footer_pages')->with(compact('levels'));
    }
    //function for view mega_menu
    public function viewPages(){
        //Dynamically Display Categories From Database
        $Pages = FooterPages::get();
           return view('admin.footer_pages.view_footer_pages')->with(compact('Pages'));
    }
    //function for edit category
    public function editPages(Request $request, $id = null){
        if($request->isMethod('post')){
            $data = $request->all();
            // echo "<pre>"; print_r($data); die;
            FooterPages::where(['id'=>$id])->update(['name'=>$data['page_name'],'description'=>$data['description']]);
            return redirect('/admin/view-pages')->with('flash_message_success','Page Updated Successfully!!!');
        }
        $PagesDetails = FooterPages::where(['id'=>$id])->first();
         $categories = FooterPages::where(['parent_id'=>0])->get();
        $levels = "<option value='' selected disabled>Main Page</option>";
        foreach($categories as $cat){
            $levels .= "<option value='".$cat->id."'>".$cat->name."</option>";
        //code for showing subcategories in main category
            $sub_categories = FooterPages::where(['parent_id'=>$cat->id])->get();
            foreach($sub_categories as $sub_cat){
                $levels .= "<option value = '".$sub_cat->id."'>&nbsp;--&nbsp;".$sub_cat->name."</option>";
            }
        }
        return view('admin.footer_pages.edit_footer_pages')->with(compact('PagesDetails','levels'));
    }
    //function for delete Pages
    public function deletePages($id=null){
            if(!empty($id)){
                FooterPages::where(['id'=>$id])->delete();
                return redirect()->back()->with('flash_message_error','Page deleted Successfully!!!');

            }
    }
}
