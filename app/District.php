<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    protected $table = 'district_list';
    protected $primaryKey = 'id';

    protected $fillable = [
        'district', 'subdistrict','village'
    ];

}
