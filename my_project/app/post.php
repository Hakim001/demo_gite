<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    public function User()
    {
        return $this->belongsTo('App\User');
    }
    
    public function categories()
    {
        return $this->belongstomany('App\category');
    }
        
}
