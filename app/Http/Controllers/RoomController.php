<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rooms;
// use Illuminate\Support\Facades\Input;
use Image;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
                $rooms = Rooms::all();
        return view('custodian.rooms',['rooms'=>$rooms]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('custodian.newroom');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        

        $room = new Rooms();
        //input method is used to get the value of input with its
        //name specified
        $room->room_no = $request->input('roomno');
        $room->room_type = $request->input('roomtype');
        $room->price = $request->input('price');
        $room->booking_price = $request->input('bookingprice');
        $room->description = $request->input('roomdescription');

        // if($request->hasFile('image')){
        // $image_tmp=$request->file('image');
        // if($image_tmp->isValid()){
        //     $extension=$image_tmp->getClientOriginalExtension();
        //     $filename=rand(111,99999).'.'.$extension;
        //     $imagepath='images/'.$filename;
        //     Image::make($image_tmp)->save($imagepath);
        //     $room ->image=$filename;
        // }

                $request->validate([ 'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',]);
                $imageName = time().'.'.$request->image->extension();
                $request->image->move(public_path('images'), $imageName);
                $room->image=$imageName;

   

    
        $room->save(); 
        return redirect()->back()->with('info','room added successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
