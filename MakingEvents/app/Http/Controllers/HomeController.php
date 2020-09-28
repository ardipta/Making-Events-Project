<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;

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
    public function index()
    {
        $events = Event::all();
        return view('home', compact('events'));
    }
    public function show($id, Event $event){
        return view('events.show', compact('event'));
    }
    public function paymentOption($id, Event $event){
        return view('payments.payment', compact('event'));
    }
}
