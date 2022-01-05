<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use App\Models\Product;
use Illuminate\Http\Request;

class UserHomeController extends Controller
{
    public function home()
    {
        $data = Product::paginate(6);
        $shops = Shop::all();
        
        return view('user.userhome', compact('data','shops'));
    }
}
