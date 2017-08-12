<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    //
    protected $primaryKey = 'user_id';

    public function comments(){
        return $this->hasMany(
            'App\Model\Comment',
            'user_id',
            'user_id');
    }
}
