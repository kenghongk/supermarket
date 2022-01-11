<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use App\Models\Product;
use Darryldecode\Cart\Cart;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function productList()
    {
        $products = Product::all();

        return view('products', compact('products')); 
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
                'image' => $request->product_img,
                'shop_id' => $request->shop_id,
                'product_quantity' => $request->product_quantity,


            )
        ]);
        session()->flash('success', 'Product is Added to Cart Successfully !');

        return redirect()->route('cart.list');
    }
    public function productdetails($id)
    {
            $product= Product::find($id);

            return view('user.productdetails', compact('product'));


        }
    }