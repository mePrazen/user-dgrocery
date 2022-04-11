<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function cartsummary()
    {
        return view('layouts.cartsummary');
    }
}
