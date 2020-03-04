<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustodianHostelController extends Controller
{
     public function hostel()
    {
    	// $hostel = user::find(Auth::user()->id);

        return view('custodian.hostel');
    }
}
