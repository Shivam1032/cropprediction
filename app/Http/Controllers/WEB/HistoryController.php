<?php

namespace App\Http\Controllers\WEB;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\History;
use Auth;


class HistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //dd(Auth::id());
        $id= Auth::id();
       // dd('Hello');
        return History::where('user_id',$id)->latest()->get();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            $role = Auth::user()->role;
          //  dd($role);
            $id= Auth::id();
            if($role===5 || $role ===4)
            {
            return History::create([
                'user_id'=>$id,
                'updated_by_id'=>$id,
                'description'=> $request['description'],
            ]);
            }else if($role === 3||$role === 2||$role === 1||$role === 0){
                return History::create([
                'user_id'=>$request['id'],
                'updated_by_id'=>$id,
                'description'=> $request['description'],
                ]);
            }else{
                return "Hello";
            }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        
        // return History::where('user_id',$id)->orderBy('created_at', 'desc')->get();
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
        //NO USE
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //NO USE
    }
}
