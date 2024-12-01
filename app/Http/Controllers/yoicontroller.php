<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class yoicontroller extends Controller
{
    public function index(){
        return view('index');
    }
    public function menu(){
        return view('menu');
    }
    public function contact(){
        return view('contact');
    }
    public function elements(){
        return view('elements');
    }
    public function news(){
        return view('news');
    }
}
