<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
   protected $fillable = [
        'code','name_product' ,'description','selling_price'
           'code_tax'
    ];
}
