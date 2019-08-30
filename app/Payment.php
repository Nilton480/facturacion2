<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
     protected $fillable =[
     'invocice_id','payment_method_id','date','value'


   ];
}
