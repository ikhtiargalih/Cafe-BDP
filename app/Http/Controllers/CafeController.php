<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CafeController extends Controller
{
    public function index()
    {
        return view('landing.index');
    }

    public function menu()
    {
        return view('landing.menu');
    }
}
