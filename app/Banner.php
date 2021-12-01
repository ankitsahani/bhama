<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
  
    protected $table='banner';
     protected $fillable = [
        'name', 'text_style', 'sort_order','content','link','images',
    ];
}
