<?php

namespace App\Http\Controllers\WEB;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Soil;
use Auth;

class SoilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = Auth::id();
        $role = Auth::user()->role;
        if($role===5){

           return Soil::where('farmer_id',$id)->latest()->get();
        }

        if($role===3){
            return Soil::all();
        }

        if($role===1||$role===0)
        {
          //  return Soil::where()->orderBy('created_at','desc');
          return Soil::all();
        }
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $count = Soil::where('farmer_id',Auth::id)->count();
        return Soil::create([
            'farmer_id' => Auth::id(),
            'status' => "Requested For Soil Testing",
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Soil::where('farmer_id',$id)->get();
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
            dd($request);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
