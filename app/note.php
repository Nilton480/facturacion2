<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class note extends Model
{
   protected $fillable =[
     'prefix','number','type','value','invoce_id'


   ];
}
