<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\Room;


class PagesController extends Controller
{
    public function rooms()
    {
        $rooms = Room::all();
        $data = [
            'currPage' => 'home',
            'rooms' => $rooms
        ];
        return view('room')->with($data);
    }
   
    public function room($slug)
    {
        $room = Room::where('slug', $slug)->first();
        $rooms = Room::all();
        $data = [
            'rooms' => $rooms,            
            'room' => $room
        ];
        // foreach (unserialize($room->images) as $image) {
        //     $thumb = str_replace("source","thumbs",$image);
        //     var_dump($thumb); var_dump($image);
        // }exit;
        return view('room')->with($data);
    }
}
