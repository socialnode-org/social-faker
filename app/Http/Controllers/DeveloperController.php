<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DeveloperController extends Controller
{
    public function home()
    {
      return view('developer.home');
    }

    public function styleGuideHome()
    {
      return view('developer.style.home');
    }

    public function styleGuideStatus()
    {
      return view('developer.style.status');
    }
}
