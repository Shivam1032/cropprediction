<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FarmerController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('farmer');
    }


    public function index()
    {
        return view('farmer.dashboard');
    }

    public function home()
    {
        return view('farmer.home');
    }

}
