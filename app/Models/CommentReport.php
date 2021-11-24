<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CommentReport extends Model
{
     //
    protected $table="comment_reports";

    /**
    */
    public function getUserInfo(){
        return $this->hasOne('App\Models\User','id','user_id');
    }

    public function getCommentInfo(){
        return $this->hasOne('App\Models\ReceipeComments','id','comment_id');
    }
}
