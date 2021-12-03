<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use App\Banner;
use Image;

class BannerController extends Controller
{

	public function addBannerForm(Request $request){
	$banner=new Banner();
         $id=$request->id;
         $banner= Banner::where('id','=',$id)->first();
         
				return view('admin.banner.add_banner')->with(compact('banner'));
			}
	public function addBanner(Request $request)
   	   {
    	if($request->isMethod('get'))
    	{
    		 $banner= new Banner();
      
        $banner->name=$request->name;
        $banner->text_style=$request->text_style;
        $banner->sort_order=$request->sort_order;
        $banner->content_type=$request->content_type;
        $banner->link=$request->link;
            
        if($request->hasfile('image')){
                echo $image_tmp = $request->file('image');
                if($image_tmp->isValid()){
                //Image File Pat code
                $extension = $image_tmp->getClientOriginalExtension();
                $filename = rand(111,99999).'.'.$extension;
                $large_image_path = 'images/backend_img/banner/'.$filename;
               
                //image resize code
                Image::make($image_tmp)->save($large_image_path);
                
                //Store img name in products table
                $banner->image = $filename; 
                }
            }


    $banner->save();
  return redirect()->back()->with(compact('banner'));
    
    	}
    	
    }

    public function viewBanner(Request $request)
    {
    	$banner=new Banner();
         $id=$request->id;
        $banner=$banner->get();
        
    	return view('admin.banner.view_banner')->with(compact('banner'));
    }

    // public function editBanner(Request $request)
    // {
    //     $bannerDetails=new Banner();
    //      $id=$request->id;
    //     $bannerDetails=$bannerDetails->get();
    // 	return view('admin.banner.edit_banner')->with(compact('bannerDetails'));
    // }
    public function editBanner(Request $request)
    {
        if($request->isMethod('post')){

        $data = $request->all();
        $id=$request->id;
        $banner = Banner::find($id);
        $banner->name = $data['name'];
        $banner->text_style = $data['text_style'];
        $banner->sort_order = $data['sort_order'];
        $banner->content_type = $data['content_type'];
         $banner->link = $data['link'];
       if($request->hasfile('image')){
                echo $image_tmp = $request->file('image');
                if($image_tmp->isValid()){
                //Image File Pat code
                $extension = $image_tmp->getClientOriginalExtension();
                $filename = rand(111,99999).'.'.$extension;
                $large_image_path = 'images/backend_img/banner/'.$filename;
               
                //image resize code
                Image::make($image_tmp)->save($large_image_path);
                
                //Store img name in products table
                $banner->image = $filename; 
                }
            }
        // if(empty($data['status'])){
        //   $data['status']=0;
        // }
        // $banner->status = $data['status'];
        $banner->save();
        return redirect()->back()->with('flash_message_success','Banner has been Updated Successfully');
      }
      $id=$request->id;
     $bannerDetails = Banner::find($id);
     return view('/admin/banner/edit_banner')->with(compact('bannerDetails'));
    }
    
}
