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

         return $this->belongsTo('App\Photo', 'photo_id');

     }


     public function isAdmin(){

       
        if($this->role['name'] == "administrator" && $this->is_active == 1){



             return true;
        }

         return false;

     }


     public function posts(){

 
        return $this->hasMany('App\Post');

     }
}