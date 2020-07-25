<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Request extends Model
{
    protected $table = 'requsts';
    protected $primaryKey = 'id';
    public $timestamps = false;
    // const CREATED_AT = 'creation_date';

    protected $fillable = [
        'farmer_id','aids_needed','brief'
    ];

    protected $casts = [
        'created_at'=> 'datetime'
    ]; 
}
