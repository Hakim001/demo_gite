<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class profil extends Model
{
    public function User()
    {
        return $this->belongsto('App\User');
    }
}
