<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //评论数据表
    protected $primaryKey = 'comment_id';

    public $timestamps = true;

    public function user(){
        return $this->belongsTo(
            'App\Model\User',
            'user_id',
            'user_id');
    }
}
