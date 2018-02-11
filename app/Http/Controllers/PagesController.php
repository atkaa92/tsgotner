<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class PagesController extends Controller
{
    public function home()
    {
        $data = [
            'currPage' => 'home'
        ];
        return view('home')->with($data);
    }

    public function royal()
    {
        $data = [
            'currPage' => 'royal'
        ];
        return view('royal')->with($data);
    }

    public function mirage()
    {
        $data = [
            'currPage' => 'mirage'
        ];
        return view('mirage')->with($data);
    }

    public function bigrussian()
    {
        $data = [
            'currPage' => 'bigrussian'
        ];
        return view('bigrussian')->with($data);
    }

    public function minirussian()
    {
        $data = [
            'currPage' => 'minirussian'
        ];
        return view('minirussian')->with($data);
    }

    public function eastern()
    {
        $data = [
            'currPage' => 'eastern'
        ];
        return view('eastern')->with($data);
    }

    public function cottages()
    {
        $data = [
            'currPage' => 'cottages'
        ];
        return view('cottages')->with($data);
    }
    
    public function cottage10()
    {
        $data = [
            'currPage' => 'cottage10'
        ];
        return view('cottage10')->with($data);
    }

    public function edem()
    {
        $data = [
            'currPage' => 'edem'
        ];
        return view('edem')->with($data);
    }
}
