<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    
    //protected $table="utilisateurs";
    //public $timestamps="false";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
      'id', 'name', 'email', 'password', 'username',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    public function profil()
    {
        return $this->hasone('App\profil');
    }
    
    public function posts()
    {
        return $this->hasMany('App\post');
    }
    
    public function isAdmin(){
        
        return true;
    }
}
