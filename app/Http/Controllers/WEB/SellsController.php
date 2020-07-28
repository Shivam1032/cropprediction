<?php

namespace App\Http\Controllers\WEB;

use App\Http\Controllers\Controller;
use App\Sells;
use App\Product;
use Illuminate\Http\Request;
use Auth;

class SellsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        // dd($request);
        $product_id =Product::where('product_name',$request['name'])->where('variety',$request['variety'])->value('id');
      //  dd($product_id);
       return Sells::create([
            'seller_id' => Auth::id(),
            'product_id' => $product_id ,
            'avail_qty' =>$request['qty'],
            'product_uom' =>$request['uom'],
            'visible' =>"1",
        ]);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Sells  $sells
     * @return \Illuminate\Http\Response
     */
    public function show(Sells $sells)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Sells  $sells
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sells $sells)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Sells  $sells
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sells $sells)
    {
        //
    }


}
