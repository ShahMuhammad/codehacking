<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    //

   protected $fillable = ['name', 'email', 'password', 'role_id', 'photo_id', 'is_active'];


    protected $hidden = ['password', 'remember_token'];




     public function role(){

        return $this->belongsTo('App\Role', 'role_id');

     }



     public function photo(){

         return $this->belongsTo('App\Photo');

     }
}