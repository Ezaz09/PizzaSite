<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function account()
    {
        $userId = Auth::user()->toArray()['id'];
        $orders = Order::where([
                                ['user_id','=', $userId],
                                ['approved_order','=',1],
                                ])->get();
        return view('auth.orders.index', compact('orders'));
    }

    public function getOrder($numberOfOrder)
    {
        $order = Order::where('number_of_order', $numberOfOrder)->first();

        if(!Auth::user()->orders->contains($order))
        {
            return back();
        }
        
        return view('auth.orders.order',compact('order'));
    }
}
 