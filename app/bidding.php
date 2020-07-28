<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bidding extends Model
{
    protected $table = 'bidding';
    protected $primaryKey = 'id';
    // const CREATED_AT = 'creation_date';

    protected $fillable = [
        'SellId','BuyerId','BidQty','uom','bid_price',
    ];

    public function sells()
    {
        return $this->belongsTo('App\Sells');
    }
}
