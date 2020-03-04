<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    public function custodians(){

    	return $this->hasone(Custodians::class);
    }
}
