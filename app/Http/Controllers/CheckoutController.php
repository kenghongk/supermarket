<?php

namespace App\Http\Controllers;
use App\Models\Order;

use App\Models\Orderitem;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    
    public function index()
    {
        
        $data = orderitem::all();

       
        return view ('product.checkout', compact('data'));
    }

    public function placeorder(Request $request)
    {
        $order = new Order();
        $order->tracking_no = 'sharma'.rand(1111,9999);
        $order->save();

        $order->id;

    }
    

}
