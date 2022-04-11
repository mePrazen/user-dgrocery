<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
    return view('layouts.home');
    }

    public function about()
    {
        return view('layouts.aboutus');
    }

    public function contact()
    {
        return view('layouts.contact');
    }

    public function checkout()
    {
        return view('layouts.checkout');
    }
}


