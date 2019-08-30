<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customers extends Model
{
   protected $fillable =[
'name','lastname','number_id','type_id','email','adrees','phone','status'

   ];
}
