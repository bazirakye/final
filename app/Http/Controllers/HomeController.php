<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    // public function index()
    // {
    //     return view('home');
    // }


     public function index(){
       
        if(Auth::user()->user_type=='2'){
            return view('admin/dashboard');
        }
        elseif(Auth::user()->user_type=='1'){
            return view('front/rooms');
        }
        elseif(Auth::user()->user_type=='3'){
            return view('custodian/dashboard');
        }
}

}