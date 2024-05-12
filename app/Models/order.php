<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    use HasFactory;

    protected $fillable = [

        'cus_id',
        'customer_id',
        'product_name',
        'buy_price',
        'sell_price',
        'paid_amount',
        'due_amount',

    ];
}
