<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable=[
        'order_no',
        'customer_name',
        'customer_email',
        'customer_phoneno',
        'customer_city',
        'customer_address',
        'shipping_name',
        'shipping_email',
        'shipping_phoneno',
        'shipping_city',
        'shipping_address',
        'purchased_items',
        'grand_total',
        'payment',
        'payment_receipt',
        'cash_on_deli',
        'order_confirm',
        'pickedbycourier',
        'ontheway',
        'readyforpickup'
        
    ];
}
