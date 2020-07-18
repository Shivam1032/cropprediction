<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class SoilController extends Controller
{


    public function createRequest(array $data)
    {
        return App\Soil::create([
            'farmer_id'=>$data['farmer_id'],
        
        ]);
    }

   

}
