<?php

namespace App\Helper;

use Twilio\Rest\Client;
use Mail;
use Auth;
use App\User;
use App\FooterPages;
use App\MegaMenues;
use App\WomenMegaMenu;
use Exception;

class Helper
{ 
   	/**
    * Send Email
    *
    * @return \Illuminate\Http\Response
    */
    
    public static function sendEmail($data,$view,$subject)
    {
       
      try 
      {
            Mail::send('email.'.$view, $data, function($message) use ($data,$subject)
             {
                 $message->to($data['email'])->subject($subject.' | BBImpex ');
                });

                
            return 1;     
      }
      catch(Exception $e)
      {

        return $e->getMessage();

      } 
    }

    /**
    * Check Role and select merchant ID
    *
    * @return \Illuminate\Http\Response
    */
    public static function getFooterPages(){
      $pages = FooterPages::get();
      return $pages;
    }
     public static function getMenMegaMenu(){
      $menmega = MegaMenues::where('parent_id',0)->get();
      return $menmega;
    }
    public static function getWomenMegaMenu(){
      $womenmega = WomenMegaMenu::where('parent_id',0)->get();
      return $womenmega;
    }
 }
