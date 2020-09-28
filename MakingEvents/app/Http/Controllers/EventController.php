<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index(){
        return view('Front_End.home');
    }
    
    public function about(){
        return view('Front_End.about');
    }

    public function service(){
        return view('Front_End.service');
    }

    public function contact(){
        return view('Front_End.contact');
    }
}
