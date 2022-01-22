<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    protected $table="product_new";
    protected $fillable=[
        'category_code'            ,
        'product_code'              ,
        'name'                     ,
        'description'               ,
        'ccan_identifier'           ,
        'requires_customization'     ,
        'length'                    ,
        'width'                     ,
        'height'                    ,
        'weight'                    ,
        'ean'                       ,
        'upc'                       ,
        'isbn'                      ,
        'color'                     ,
        'size'                      ,
        'brand'                     ,
        'item_detail_fields'        ,
        'tags'                      ,
        'image_url'                 ,
        'product_page_url'          ,
        'tax_type_code'             ,
        'gst_tax_type_code'         ,
        'base_price'                ,
        'cost_price'                ,
        'tat'                       ,
        'mrp'                       ,
        'updated'                   ,
        'category_name'             ,
        'enabled'                   ,
        'type'                      ,
        'component_product_code'    ,
        'component_quantity'        ,
        'component_price'           ,
        'hsn_code'                  ,
        'tax_calculation_type'      ,
        'batch_group'               ,
        'GRN_expiry_tolerance'      ,
        'dispatch_expiry_tolerance' ,
        'return_expiry_tolerance'   ,
        'Expirable'                 ,
        'determine_expiry_from'     ,
        'shelf_life'                ,
        'expiry_date'               ,
        'created_at',
        'updated_at',
    ];
    //  public function attributes(){
    //     return $this->hasMany('App\ProductsAttribute','product_id');
    // }
    // public function scopeSearch($query , $s){
    //     return $query->where('product_name','like','%'.$s.'%')->orWhere('description','like','%'.$s.'%');

    // }
}
