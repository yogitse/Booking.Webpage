<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home(){
        return view('Layout.main');
}

    public function book(){
        return view('Layout.booking');
    }

    public function about(){
        return view('Layout.about');
    }
}

