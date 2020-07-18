<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeedDistributionController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('seeddist');
    }


    public function index()
    {
        return view('seed.dashboard');
    }

    public function home()
    {
        return view('seed.home');
    }
}
