<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected $table='categories';

    public function getIngredients(){
    	return $this->hasMany(Ingredient::class, 'category_id', 'id');
    }
}
