<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CatalogController extends Controller
{
    public function showcatalog()
    {

        $data = Product::paginate(8);
        
        return view('Catalog.catalog', compact('data'));

    }
    public function search(Request $request)
    {
        $search=$request->search;

        if($search=='')
        {
            $data = Product::paginate(8);
        
            return view('Catalog.catalog', compact('data'));
        }

        $data=Product::where('product_name', 'Like', '%'.$search.'%')->get();

        return view('Catalog.catalog', compact('data'));

    }
}
