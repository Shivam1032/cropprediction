<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $table = 'products';
    protected $primaryKey = 'id';
    // const CREATED_AT = 'creation_date';

    protected $fillable = [
      'name','variety','min_price'
    ];

    public function seller()
    {
        return $this->hasMany('App\Sells');
    }

}
