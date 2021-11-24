<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ReceipeComments extends Model
{
    //
    protected $table='receipe_comments';

    public function getReportUser()
    {
        return $this->hasMany('App\Models\CommentReport','comment_id','id');
    }
}
