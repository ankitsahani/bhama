<?php
namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
use App\Product;
use App\Category;
use App\Banner;
use DB;
use App\Contact;
use Auth;
class IndexController extends Controller
{
    public function index(Request $request){
            $banner=Banner::where('status',1)->orderby('sort_order','asc')->get();
        //product display in ascending
        $s = $request->input('s');
        $productsAll = Product::search($s)->paginate(12);

        //product display in descending order
        
        $productsAll = Product::orderBy('id','DESC')->search($s)->paginate(12);
        //product display in Randomly order
        $productsAll = Product::inRandomOrder()->search($s)->paginate(12);
        
        //Display Categories or Sub Categories in left Sidebar of Home Page
        $categories = Category::with('categories')->where(['parent_id'=>0])->get();
        $categories = json_decode(json_encode($categories));
        //echo "<pre>";print_r($categories);die;
        $categories_menu = "";
        foreach($categories as $cat){
            $categories_menu .="<div class='panel-heading'>
                    <h4 class='panel-title'>
                        <a data-toggle='collapse' data-parent='#accordian'
                         href='#".$cat->id."'>
                            <span class='badge pull-right'><i class='fa fa-plus'></i></span>
                            ".$cat->Name."
                        </a>
                    </h4>
                </div>
                <div id='".$cat->id."' class='panel-collapse collapse'>
                    <div class='panel-body'>
                        <ul>";
                        $sub_categories = Category::where(['parent_id'=>$cat->id])->get();
                        foreach($sub_categories as $subcat){
                        $categories_menu .="<li><a href='".$subcat->url."'>".$subcat->Name."</a></li>";
                        }
                        $categories_menu .="
                        </ul>
                    </div>
                </div>
                ";
        }
        return view('index')->with(compact('productsAll','categories_menu','categories','s','banner'));
    }
    public function contactUs(Request $request){
       
        return view('products.mail');
    }
     public function send(Request $request){
       $this->validate($request,[
        'name'=>'required',
        'email'=>'required|email',
         'subject'=>'required',
        'message'=>'required'
       ]);
       
         if($request->isMethod('post')){
            
                //adding users in table
                $user =new Contact();
                $user->name = $request->name;
                $user->email = $request->email;
                $user->subject= $request->subject;
                $user->message= $request->message;
                $user->save();
                
                   return back()->with('success','Thanks for Concating Us!' );
                 }
        
       
    }
    public function aboutUs()
    {
        return view('products.aboutus');
    }
}
