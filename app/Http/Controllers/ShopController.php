<?php

namespace App\Http\Controllers;
use App\Models\Shop;
use App\Models\Product;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function viewshop($id)
    {
        if(Shop::where('id', $id)->exists())
        {
            $shops = Shop::where('id', $id)->first();
            $product = Product::where('shop_id', $shops->id)->get();
            return view('Catalog.viewshop', compact('shops', 'product'));
        }
        else{
            return redirect('/')->with('message','Shop not exists');
        }
    } 
    public function shopdetails($id)
    {
        $shop = Shop::find($id);

        return view('user.shopdetails', compact('shop'));

    } 
}
