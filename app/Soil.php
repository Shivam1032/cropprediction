<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Soil extends Model
{
    //
    protected $table = 'soil_test';
    protected $primaryKey = 'id';
    // const CREATED_AT = 'creation_date';

    protected $fillable = [
        'farmer_id','ph','nitrogen','phosphorus','potasium','rainfall','temprature','crop','status',
    ];

    
}
