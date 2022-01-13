<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class AdminDashboardController extends Controller
{
	public function index(){

		$userid=Auth::user()->id;
		$orders = Order::orderby('created_at','desc')->get();
		$totalsales = Order::where('shop_id',$userid)->sum('price');
		$OrderNotComplete = Order::where('status','Not delivered')->count();
		$OrderComplete = Order::where('status','Delivered')->count();
		$todaySales = Order::where('created_at',Carbon::today())->sum('price');

		return view('admin.dashboard',[
			'orders'=>$orders,
			'totalsales'=>$totalsales,
			'OrderNotComplete'=>$OrderNotComplete,
			'OrderComplete'=>$OrderComplete,
			'todaySales'=>$todaySales,
		]);
	}


}
