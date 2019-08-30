<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tax extends Model
{
    protected $fillable = [
       'code','value','type'

    ];
}
