<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    use HasFactory;

    protected $table= 'item_orders';
    protected $fillable = [
        'order_id',
        'prod_id',
        'prod_name',
        'price',
        'prod_quantity',
    ];
}
