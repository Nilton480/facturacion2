<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class invoce extends Model
{
   protected $fillable = [
        'prefix','invoice_id','date_invoice','expiration_date','type_invoice','customers_id,''invoice_value','status_invoice','seller_id'
    ];
}
