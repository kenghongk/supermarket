<?php

namespace App\Http\Controllers;

<<<<<<< Updated upstream
use Illuminate\Http\Request;
use App\Models\Product;
=======
use App\Models\Product;
use Illuminate\Http\Request;
>>>>>>> Stashed changes

class ProductController extends Controller
{
    public function productList()
    {
<<<<<<< Updated upstream
        $data = Product::all();

        return view('Catalog.catalog', compact('data'));
=======
        $products = Product::all();

        return view('products', compact('products'));
>>>>>>> Stashed changes
    }

    public function cartList()
    {
        return view('cart');
    }

    public function addToCart(Request $request)
    {
        \Cart::add([
            'id' => $request->id,
<<<<<<< Updated upstream
            'name' => $request->product_name,
            'price' => $request->price,
            'quantity' => $request->quantity,
            'attributes' => array(
            	 'shop_id' => $request->shop_id,
                'image' => $request->product_img,
               
                
=======
            'name' => $request->name,
            'price' => $request->price,
            'quantity' => $request->quantity,
            'attributes' => array(
                'image' => $request->image,
                'vendor' => $request->vendor,


>>>>>>> Stashed changes
            )
        ]);
        session()->flash('success', 'Product is Added to Cart Successfully !');

        return redirect()->route('cart.list');
    }
<<<<<<< Updated upstream
}
=======
}
>>>>>>> Stashed changes
