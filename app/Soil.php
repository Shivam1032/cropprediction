<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Soil extends Model
{
    //
    protected $table = 'soil_testing';
    protected $primaryKey = 'id';
    // const CREATED_AT = 'creation_date';

    protected $fillable = [
        'farmer_id','soil_test_id','nitrogen','phosphorus','pottasium','rainfall','status',
    ];

    
}
