<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SoilTesterController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('soiltester');
    }


    public function index()
    {
        return view('soil.dashboard');
    }

    public function home()
    {
        return view('soil.home');
    }
}
