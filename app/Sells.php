<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sells extends Model
{
    //
    protected $table = 'sell';
    protected $primaryKey = 'id';
    // const CREATED_AT = 'creation_date';

    protected $fillable = [
        'seller_id','product_id','avail_qty','product_uom','visible'
    ];

    public function bids()
    {
        return $this->hasMany('App\bidding');
    }

}
