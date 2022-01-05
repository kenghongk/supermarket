<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class AdminProductController extends Controller
{
    public function product()
    {
        return view('admin.product');
    }
    /*---- Create Product ----*/
    public function uploadproduct(Request $request)
    {
        $data= new Product;

        $product_img=$request->file;

        $imagename=time().'.'.$product_img->getClientOriginalExtension();

        $request->file->move('productimage',$imagename);

        $data->product_img=$imagename;

        $data->product_name=$request->product_name;

        $data->description=$request->description;

        $data->price=$request->price;

        $data->quantity=$request->quantity;

        $data->category=$request->category;

        $data->save();

        return redirect()->back()->with('message','Product Added Successfully');
     }
      /*---- Show Product ----*/
     public function showproduct()
     {
         $data=Product::all();

         return view('admin.showproduct', compact('data'));
     }
      /*---- Delete Product ----*/
     public function deleteproduct($id)
     {
         $data=Product::find($id);

         $data->delete();

         return redirect()->back()->with('message', 'Product Deleted');
     }
      /*---- Update Product ----*/
     public function updateview($id)
     {
         $data=Product::find($id);

         return view('admin.updateview', compact('data'));
     }
     public function updateproduct(Request $request, $id)
     {
         $data=Product::find($id);

        $product_img=$request->file;

        if($product_img)
        {
        $imagename=time().'.'.$product_img->getClientOriginalExtension();

        $request->file->move('productimage',$imagename);

        $data->product_img=$imagename;
        }
        $data->product_name=$request->product_name;

        $data->description=$request->description;

        $data->price=$request->price;

        $data->quantity=$request->quantity;

        $data->category=$request->category;

        $data->save();

        return redirect()->back()->with('message','Product Updated Successfully');
     }
}
