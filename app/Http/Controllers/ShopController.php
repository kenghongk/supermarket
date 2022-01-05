<?php

namespace App\Http\Controllers;
use App\Models\Shop;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function shop()
    {
        return view('shop.insert');
    }
    /*---- Create shop ----*/
    public function uploadshop(Request $request)
    {
        $shop= new Shop;

        $shop_img=$request->file;

        $imagename=time().'.'.$shop_img->getClientOriginalExtension();

        $request->file->move('shopimage',$imagename);

        $shop->shop_img=$imagename;

        $shop->shop_name=$request->shop_name;

        $shop->address=$request->address;

        $shop->tel_no=$request->tel_no;

        $shop->save();

        return redirect()->back()->with('message','Shop created Successfully');

    }
    /*---- Show shop ----*/
    public function showshop()
    {
        $data=Shop::all();

        return view('admin.showshop', compact('data'));
    }
    /*---- delete shop ----*/
    public function deleteshop($id)
    {
        $data=Shop::find($id);

        $data->delete();

        return redirect()->back()->with('message', 'Shop Deleted');
    }
    /*---- update shop ----*/
    public function updateviewshop($id)
    {
        $data=Shop::find($id);

        return view('admin.updateviewshop', compact('data'));

    }
    public function updateshop(Request $request, $id)
    {
        $data=Shop::find($id);

       $shop_img=$request->file;

       if($shop_img)
       {
       $imagename=time().'.'.$shop_img->getClientOriginalExtension();

       $request->file->move('shopimage',$imagename);

       $data->shop_img=$imagename;
       }
       $data->shop_name=$request->shop_name;

       $data->address=$request->address;

       $data->tel_no=$request->tel_no;

       $data->save();

       return redirect()->back()->with('message','Shop Updated Successfully');
    }
}
