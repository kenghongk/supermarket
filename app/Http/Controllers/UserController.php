<?php

namespace App\Http\Controllers;
use App\Models\Orders;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $data = orders::all();
        return view('orders.index', compact('data'));
    }

    public function delete($id)

    {
        $data = orders::find($id);

        $data->delete();

        return redirect()->back()->with('success', 'The orders selected has been deleted!');
    }
}
