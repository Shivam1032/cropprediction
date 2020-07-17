<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DistrictController extends Controller
{
     public function __construct()
    {
        $this->middleware('superadmin');
    }

    public function index()
    {
        
    }
}
