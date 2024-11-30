<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Model_has_roles extends Model
{
    //

    public function roles(){
        //uno a uno
        return $this->hasOne(Role::class,"id");
    }
}
