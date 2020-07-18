<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrivateCompanyController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('pvt');
    }


    public function index()
    {
        return view('buyer.dashboard');
    }

    public function home()
    {
        return view('buyer.home');
    }
}
