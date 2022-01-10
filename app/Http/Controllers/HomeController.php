<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use App\Models\User;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function redirect()
    {
        $type_user=Auth::user()->type_user;

        if($type_user== '1')
        {
            return view('admin.home');
        }
        else
        {
            $data = Product::paginate(8);
            $shops = Shop::paginate(8);

            return view('user.userhome', compact('data','shops'));
        }
    }
    public function index()
    {
        if(Auth::id())     
        {
            return redirect('redirect');
        }
    else
    {
        
        return view('layouts.homepage');
    }
        
    }
    
}
