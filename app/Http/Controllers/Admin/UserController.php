<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Subscription;
use Auth;
use Toastr;
use Validator;
use Carbon\Carbon;
use Illuminate\Pagination\Paginator;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\UsersExport;
use App\Models\Otp;

class UserController extends Controller
{
    
    public function usersList(Request $request){

               
       $field = $request->post('field');
       $searchValue = $request->get('search_value');
     
       if(!empty($field))
        {
            if(!empty($request->post())){
                if($field == 'all'){
                    $users = User::orWhere('user_name',  'like','%'. $searchValue.'%')->orWhere('first_name',  'like','%'. $searchValue.'%')->orWhereRaw("concat(first_name, ' ', last_name) like '%$searchValue%' ")->orWhere('email',  'like','%'. $searchValue.'%')->orderBy('created_at','DESC')->get();
                } else if($field == 'first_name'){
                $users = User::orWhere('first_name',  'like','%'. $searchValue.'%')->orWhereRaw("concat(first_name, ' ', last_name) like '%$searchValue%' ")->orderBy('created_at','DESC')->get();
                } else{
                    $users = User::where($field,  'like','%'. $searchValue.'%')->orderBy('created_at','DESC')->get();
                }
            }
        } else {

            $users = User::orderBy('created_at','DESC')->get();
            
        }
        return view('admin.user.users_management',compact('users','field','searchValue'));
    }
    public function addUsers(Request $request){

        if($request->isMethod('post')){
            $validator = Validator::make($request->all(),[
                'user_name'=>'required|unique:users,user_name',
                'subscription_id'=>'required',
                'first_name'=>'required',
              
                'email' => 'required|email|unique:users',
                'password' => 'min:6|required_with:confirm_password|same:confirm_password',
                'confirm_password' => 'min:6'
                
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
           
                $user=New User;
                $data=$request->all();
                $user->user_name= $data['user_name'];
                $user->first_name= $data['first_name'];
                $user->last_name= $data['last_name'];
                $user->email= $data['email'];
                $user->password=bcrypt($data['password']);
                $user->subscription_id	= $data['subscription_id'];
                if($data['subscription_id']){
                $user->is_subscribed = 1;
                $user->subscription_date=Carbon::now();
                }else{
                   $user->is_subscribed = 0; 
                   $user->subscription_date=Carbon::now();
                }
                $subscribe_plan=Subscription::where('id',$data['subscription_id'])->first();

                $expiry = date('Y-m-d', strtotime(date('Y-m-d'). '+'.$subscribe_plan->validity_days.' days'));
                /*$date = date('Y-m-d', strtotime('+1 month', time()));
                print_r($date);exit;*/
                $user->expiration_date = $expiry;
                $user->save();

                $otp=new Otp();
                $otp->user_id=$user->id;
                $otp->active=1;
                $otp->save();

                Toastr::success('User Added Successfully ','Success');
                return redirect('users-list');
            }
        
        }
        $subscriptionPlan=Subscription::all();
        return view('admin.user.add_user',compact('subscriptionPlan'));
    }
    public function viewUsers($id){
        $user=User::select('users.*')
                    ->where('users.id',$id)->first();
          if(!empty($user)){
            $dayAfter =$user->validity_days;
            $dayToCheck =Carbon::parse($user->created_at)->addDays($dayAfter);
            return view('admin.user.view_user',compact('user','dayToCheck'));
          }
        return view('admin.user.view_user',compact('user'));
    }
    public function editUsers(Request $request,$id){
        if($request->isMethod('post')){
            $validator = Validator::make($request->all(),[
                'user_name'=>'required',
                'first_name'=>'required',
              //'subscription_id'=>'required',
               
                'email' => 'required'
               
                
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
            $user=User::find($id);
            $data=$request->all();
            $user->user_name=$data['user_name'];
            $user->first_name=$data['first_name'];
            $user->last_name=$data['last_name'];
             
            $user->email=$data['email'];
            if(!empty($data['upassword'])){
                 $user->password=bcrypt($data['upassword']);

            }
           
            

/*            if($user->subscription_id == 1){
                $user->is_subscribed = 0;
                $user->subscription_date=Carbon::now();
            }else{
               $user->is_subscribed = 1; 
               $user->subscription_date=Carbon::now();
            }*/

            if(@$data['subscription_id']){
                $user->subscription_id  = $data['subscription_id'];
                $user->is_subscribed = 1;
                $user->subscription_date=Carbon::now();
                $subscribe_plan=Subscription::where('id',$data['subscription_id'])->first();
                $expiry = date('Y-m-d', strtotime(date('Y-m-d'). '+'.$subscribe_plan->validity_days.' days'));
                $user->expiration_date = $expiry;
            }
            
            
            $user->save();
            Toastr::success('User Updated Successfully ','Success');
            return redirect('users-list');
            }
        }
        $user=User::find($id);
        
        $subscriptionPlan=Subscription::all();
        return view('admin.user.edit_user',compact('user','subscriptionPlan'));
    }
    public function deleteUsers($id){
        User::where('id',$id)->delete();
        Toastr::success('User Deleted Successfully ','Success');
        return redirect()->back();
    }
    public function export(Request $request) 
    {   
        
        if($request->searchValue && $request->field) {
             $searchValue = $request->searchVale;
             $field=$request->field;
              return Excel::download(new UsersExport($request->searchValue,$request->field), 'users.xlsx');
        }
        // if($request->searchValue && $request->field=='all'){
        //     $searchValue = "";
        //     $field="all";
        //      return Excel::download(new UsersExport($searchValue,$field), 'users.xlsx');
        // }
        else{
             $searchValue = "";
             $field="";
              return Excel::download(new UsersExport($searchValue,$field), 'users.xlsx');
        }
        
      
         
       
    }
}

