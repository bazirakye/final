<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Hostels;

class Hostels extends Model
{
   	 public function custodians(){
    	return $this->belongsto(Hostels::class);
    	
    }
    //  protected $fillable = [
    //     'id',
    //     'hostelName',
    //     'descripton',
        
    // ];
    public function rooms(){

    	return $this->hasmany(Rooms::class);
    }
}
