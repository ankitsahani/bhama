<?php

namespace App\Http\Controllers\Admin;
use Illuminate\auth\Events\Verified;
use Illuminate\Http\Request;
use App\User;
use App\Country;
use Auth;
use Session;
use Validator;
use DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Laravel\Socialite\Facades\Socialite;

class UsersController extends Controller
{
    public function userLoginRegister(){
        return view('users.login_register');  
    }
    public function login(Request $request)
    {

    if($request->isMethod('post')){

            $data = $request->all();
        User::where('admin','=',0)->get();
            if(Auth::attempt(['email'=>$data['email'],'password'=>$data['password'],'admin' => 1])){
            // $userStatus = User::where('email',$data['email'])->first();
                // if($userStatus->admin == 0){
                //     return redirect()->back()->with('flash_message_error','Your account is not activated! Please confirm your email to activate.');    
                // }

                Session::put('frontSession',$data['email']);
                if(!empty(Session::get('session_id'))){
                $session_id = Session::get('session_id');
                DB::table('cart')->where('session_id',$session_id)->update(['user_email'=>$data['email']]);
                }
           
                return redirect('/');
            }
            else if(Auth::attempt(['email'=>$data['email'],'password'=>$data['password'],'admin' => 0]))
            {
                return redirect()->back()->with('flash_message_error','You are blocked by admin. Please contact admin department');
            }
            else {
                return redirect()->back()->with('flash_message_error','Invalid username or password');
            }
        }

    }
    public function register(Request $request){
        if($request->isMethod('post')){
            $data = $request->all();
            //echo "<pre>";print_r($data);die;
            //Check if user already exists 
            $userCount = User::where('email',$data['email'])->count();
            if($userCount>0){
                return redirect()->back()->with('flash_message_error','Email already exists!');
            }else{
                //adding users in table
                $user =new User;
                $user->name = $data['name'];
                $user->email = $data['email'];
                $user->password = bcrypt($data['password']);
                $user->save();

                // Send Confirmation Email
                 $email = $data['email'];
                 $messageData = ['email'=>$data['email'],'name'=>$data['name'],'code'=>base64_encode($data['email'])];
                 Mail::send('emails.confirmation',$messageData,function($message) use($email){
                     $message->to($email)->subject('Confirm your M-shop Account');
                 });
 
                 return redirect()->back()->with('flash_message_success','Please confirm your email to activate your account!');
                if(Auth::attempt(['email'=>$data['email'],'password'=>$data['password']])){
                    Session::put('frontSession',$data['email']);
                if(!empty(Session::get('session_id'))){
                    $session_id = Session::get('session_id');
                    DB::table('cart')->where('session_id',$session_id)->update(['user_email'=>$data['email']]);
                }
                    return redirect('/');
                }
            }
        }
    }
    
 public function forgotPassword(Request $request){
        if($request->isMethod('post')){
            $data = $request->all();
            /*echo "<pre>"; print_r($data); die;*/
            $userCount = User::where('email',$data['email'])->count();
            if($userCount == 0){
                return redirect()->back()->with('flash_message_error','Email does not exists!');
            }

            //Get User Details
            $userDetails = User::where('email',$data['email'])->first();

            //Generate Random Password
            $random_password = str_random(8);

            //Encode/Secure Password
            $new_password = bcrypt($random_password);

            //Update Password
            User::where('email',$data['email'])->update(['password'=>$new_password]);

            //Send Forgot Password Email Code
            $email = $data['email'];
            $name = $userDetails->name;
            $messageData = [
                'email'=>$email,
                'name'=>$name,
                'password'=>$random_password
            ];
            Mail::send('emails.forgotpassword',$messageData,function($message)use($email){
                $message->to($email)->subject('New Password - M-Shop Website');
            });

            return redirect('login-register')->with('flash_message_success','Please check your email for new password!');

        }
        return view('users.forgot_password');
    }



  public function confirmAccount($email){
        $email = base64_decode($email);
        $userCount = User::where('email',$email)->count();
        if($userCount > 0){
            $userDetails = User::where('email',$email)->first();
            if($userDetails->admin == 1){
                return redirect('login-register')->with('flash_message_success','Your Email account is already activated. You can login now.');
            }else{
                User::where('email',$email)->update(['admin'=>1]);

                // Send Welcome Email
                $messageData = ['email'=>$email,'name'=>$userDetails->name];
                Mail::send('emails.welcome',$messageData,function($message) use($email){
                    $message->to($email)->subject('Welcome to M-shop Website');
                });

                 return redirect('login-register')->with('flash_message_success','Your Email account is activated. You can login now.');
            }
        }else{
            abort(404);
        }
    }










    public function checkEmail(Request $request){
            //Check if user already exists 
            $data = $request->all();
            $userCount = User::where('email',$data['email'])->count();
            if($userCount>0){
             echo "false";
            }else{
                echo "true";die;
            }
    }
    public function account(Request $request){
        $user_id = Auth::user()->id;
        $userDetails = User::find($user_id);
        $countries = Country::get();

        if($request->isMethod('post')){
            $data = $request->all();
            if(empty($data['country'])){
                return redirect()->back()->with('flash_message_error','Please Enter your Country ');
            }
            $user = User::find($user_id);
            $user->email = $data['email'];
            $user->name = $data['name'];
            $user->address = $data['address'];
            $user->city = $data['city'];
            $user->state = $data['state'];
            $user->country = $data['country'];
            $user->pincode = $data['pincode'];
            $user->mobile = $data['mobile'];
            $user->save();
            return redirect()->back()->with('flash_message_success','Your Account Detail has been Successfully Updated!!');

        }
        return view('users.account')->with(compact('countries','userDetails'));
    }
    public function chkUserPassword(Request $request){
        $data = $request->all();
        //echo"<pre>";print_r($data);die;
        $current_password = $data['current_pwd'];
        $user_id = Auth::User()->id;
        $check_password = User::where('id',$user_id)->first();
        if(Hash::check($current_password,$check_password->password)){
            echo "true";die;
        }else{
            echo"false";die;
        }

    }
    public function updatePassword(Request $request){
        if($request->isMethod('post')){
            $data = $request->all();
            //echo"<pre>";print_r($data);die;
            $old_pwd = User::where('id',Auth::User()->id)->first();
            $current_pwd = $data['current_pwd'];
            if(Hash::check($current_pwd,$old_pwd->password)){
                //update password
            $new_pwd = bcrypt($data['new_pwd']);
            User::where('id',Auth::User()->id)->update(['password'=>$new_pwd]);
            return redirect()->back()->with('flash_message_success','Password is updated Successfully!!');
            }else{
                return redirect()->back()->with('flash_message_error','Current Password is incorrect!');
            }
        }
    }
    public function logout(){
        Auth::logout();
        Session::forget('frontSession');
        Session::forget('session_id');
        return redirect('/');
    }
    public function viewUsers(Request $request)
    {

        $users=new User();
         $id=$request->id;
        $users=User::where('admin','!=',2)->get();
        return view('admin.users.view_users')->with(compact('users'));
    }
     public function deleteUsers($id=null)
    {

     User::where(['id'=>$id])->delete();
      return redirect()->back()->with('flash_message_error','User has been deleted Successfully!!!');
   }
    public function status($id)
    {
     

      $user = User::where('id', $id)->first();

     
        if($user->admin == 1)
        {
            $user->admin = 0;//0 for Block
            $user->save();
         
         }
        else
             $user->admin = 1;//1 for Unblock
             $user->save();

        if($user->admin == 1)
           {      
            return 1;
        }else{
            return 2;
        }

    }

}
