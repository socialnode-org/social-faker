<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\{Notice, User};

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $timeline = Notice::orderBy('id', 'desc')->paginate(10);
        return view('home', compact('timeline'));
    }
}
