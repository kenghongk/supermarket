<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function productList()
    {
        $data = Product::all();

        return view('Catalog.catalog', compact('data'));
    }

    public function cartList()
    {
        return view('cart');
    }

    public function addToCart(Request $request)
    {
        \Cart::add([
            'id' => $request->id,
            'name' => $request->product_name,
            'price' => $request->price,
            'quantity' => $request->quantity,
            'attributes' => array(
            	 'shop_id' => $request->shop_id,
                'image' => $request->product_img,
               
                
            )
        ]);
        session()->flash('success', 'Product is Added to Cart Successfully !');

        return redirect()->route('cart.list');
    }
}
