<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
   protected $table = 'contact_us';
    protected $primaryKey = 'id';
   
   protected $fillable=[
      'user_id','name','mobile','subject','message','status',
   ];


}
