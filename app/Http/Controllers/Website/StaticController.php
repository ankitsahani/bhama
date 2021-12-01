<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StaticController extends Controller
{
    //
    public function aboutUs(){
        return view('website.aboutus');
    }
    public function contactUs(){
        return view('website.contactus');
    }
}
