<?php

namespace App\Http\Livewire;

use App\Models\Order;
use Livewire\Component;
use App\Models\Cart;
use Darryldecode\Cart\Cart;
use GuzzleHttp\Psr7\Request;


class CartList extends Component
{
    protected $listeners = ['cartUpdated' => '$refresh'];
      public $cartItems = [];
  
      public function removeCart($id)
      {
          \Cart::remove($id);
  
          session()->flash('success', 'Item has removed !');
      }
  
      public function clearAllCart()
      {
          \Cart::clear();
  
          session()->flash('success', 'All Item Cart Clear Successfully !');
      }

      
  
      public function render()
      {
          $this->cartItems = \Cart::getContent()->toArray();
  
          return view('livewire.cart-list');
      }
      public function placeorder(Request $request)
      {
        $order = new Order();
        $order->tracking_no = 'sharma'.rand(1111,9999);
        $order->save();
        $order->id;
      }

}
