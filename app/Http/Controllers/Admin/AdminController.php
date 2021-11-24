<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\User;
use Auth;
use Session;
use Cache;
use Toastr;
use Validator;
use Hash;
use Config;
use DB;
use Carbon\Carbon;
class AdminController extends Controller
{
    public function login(Request $request){
        
        if($request->isMethod('post')){
            $validator = Validator::make($request->all(),[

                'email' => 'required|email',
                'password' => 'required'
            ]);
        if ($validator->fails()) {
            $messages = $validator->messages();
            return redirect()->back()
              ->withErrors($validator)
              ->withInput();
        }else{
                $email=$request->email;
                $password=$request->password;
            if (Auth::guard('admin')->attempt(['email' => $email, 'password' => $password])) {
                    Toastr::success('Login Successfully ','Success');
                return redirect('/dashboard');
                } else {
                    Toastr::error('Please enter valid credentials.','Failed');
                    return redirect('/login');
                }
            }
        }
      
        return view('admin.index');
    }
    public function dashboard(){
        $totalUsers=User::count();

        return view('admin.dashboard',compact('totalUsers'));
    }
    public function profile(){
        $admin=Admin::first();
        return view('admin.profile',compact('admin'));
    }
    public function editProfile(Request $request,$id){
        if($request->isMethod('post')){
           
            $validator = Validator::make($request->all(),[
                'name'=>'required|min:3',
                'email'=>'required|email',
                'mobile'=>'required|min:7|numeric',
                'mobile'=>'max:14',
                'profile_image' => 'profile_image|mimes:jpg,png,jpeg,gif,svg'
              
            ]);
            if ($validator->fails()) {
                $messages = $validator->messages();
                foreach ($messages->all() as $message) {
                    Toastr::error($message, 'Failed', ['timeOut' => 5000]);
                }
                return redirect()->back()
                ->withErrors($validator)
                ->withInput();
            }else{
                $admin=Admin::find($id);
                $data=$request->all();
                $admin->name=$data['name'];
                $admin->email=$data['email'];
                $admin->mobile=$data['mobile'];
                if($request->hasFile('profile_image')) {
                    $file = $request->file('profile_image');
                    $fileName = time() . '.'.$file->getClientOriginalExtension();
                    $destinationPath = public_path('/assets/images');
                    $file->move($destinationPath, $fileName);
                    $admin->profile_image = $fileName;
                }
                $admin->save();
                Toastr::success('Profile Updated Successfully ','Success');
                return redirect('profile');
            }
        }
        $admin=Admin::find($id);
        return view('admin.edit_profile',compact('admin'));
    }
    public function changePassword(Request $request){
        
        $id = auth()->guard('admin')->id();
        //echo $id;die;
        $admin = Admin::findOrFail($id);
        if($request->isMethod('post')){
         
           // echo $user->password;die;
              if (Hash::check($request->current_password,$admin ->password)) { 
                $admin ->fill([
                'password' => Hash::make($request->password)
                ])->save();
               // echo "Hello";die;
            
                Toastr::success('Password Changed', 'Success', ['options']);
                return redirect('/dashboard');
            
            } else {
             // echo "fail";die;
              Toastr::error('failed', 'Failed', ['timeOut' => 10000]);
                return redirect()->route('change-password');
            }
          
           
         }
          
          return view('admin.change_password');
        
  
  
    }
    
    public function logout(){
        Auth::logout();
        Session::flush();
        Cache::flush();
        Toastr::success('Logout Successfully','Success');
        return redirect('/login');
    }

}
