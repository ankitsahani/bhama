<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    //
    protected $table="cart";
    protected  $fillable=['cart_id','user_id','product_id','qty','selling_price','price','size','grand_total','coupon_price'];
}
