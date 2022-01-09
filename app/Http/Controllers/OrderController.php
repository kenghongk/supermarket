<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{

    public function vieworder()
   {
       $order=Order::where('status', 'Not delivered')->get();
       $order2=Order::where('status', 'Delivered')->get();
       return view('admin.order',compact('order2','order'));
       
   }
   public function updatestatus($id)
   {
       $order=Order::find($id);

       $order->status= 'Delivered'; 

       $order->save();

       return redirect()->back()->with('message','Order Delivered Successfully');
   }
}
