<?php

namespace App\Http\Controllers;

use App\Models\OrderItem;
use Darryldecode\Cart\Cart;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CheckoutComponent extends Controller
{
    public function placeOrder()
    {

    foreach(\Cart::instance('cart')->content as $item)

    $orderItem = new OrderItem();

    $orderItem->prod_id=$item->id;
    $orderItem->order_id=$order->id;
    $orderItem->prod_name=$item->name;
    $orderItem->prod_price=$item->price;
    $orderItem->prod_quantity=$item->quantity;

    $orderItem->save();

    return view()

    }
}
