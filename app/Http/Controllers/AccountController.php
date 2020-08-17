<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function account()
    {
        $idOfuser = Auth::user()->toArray()['id'];
        $orders = Order::where('idOfUser', $idOfuser)->get();
        return view('auth.orders.index', compact('orders'));
    }

    public function getOrder($numberOfOrder)
    {
        $order = Order::where('numberOfOrder', $numberOfOrder)->first();
        return view('auth.orders.order',compact('order'));
    }
}
