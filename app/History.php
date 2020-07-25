<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    protected $table = 'history';
    protected $primaryKey = 'id';
    // const CREATED_AT = 'creation_date';

    protected $fillable = [
      'user_id','updated_by_id','description'
    ];
    
}
