<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Soil;

class SoilController extends Controller
{


    public function createRequest(array $data)
    {
        return Soil::create([
            'farmer_id'=>$data['farmer_id'],
        ]);
    }

   

}
