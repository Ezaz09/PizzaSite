<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Order;
use App\Product;
use Illuminate\Http\Request;

class BasketController extends Controller
{
    public function basket(){
        $orderId = session('orderId');
        if(!is_null($orderId))
        {
            $order = Order::findOrFail($orderId);
        }
        else
        { 
            session()->flash('emptyBasket', 'Your basket is empty!');
            return redirect()->route('index');
        }
        
        return view('basket', compact('order'));
    }

    public function basketPlace(){
        $orderId = session('orderId');
        if(is_null($orderId))
        {
            return redirect()->route('index');
        }
    
        $order = Order::find($orderId);
        $totalPrice = $order->calculateTotalPriceForOrder();
        if($totalPrice == 10)
        {
            session()->flash('emptyBasket', 'Your basket is empty!');
            return redirect()->route('basket'); 
        }

        if(Auth::check() == true)
        {
            $user = Auth::user()->toArray(); 
        } else {
            $user = null;
        }

        $information  = array('information' => ['totalPrice' => $totalPrice, 'user' => $user]);

        return view('order', $information);
    }

    public function basketConfirm(Request $request){
        $orderId = session('orderId');
        if (is_null($orderId))
        {
            return redirect()->route('index');
        }
        $order = Order::find($orderId);


        if(Auth::check() == true)
        {
            $userId =  Auth::user()->toArray()['id'];
        } else {
            $userId = null; 
        }

        $order->saveOrder($userId,
                          $request->name,
                          $request->surname,
                          $request->deliveryAddress);
        session()->flash('successConfirm', 'Your order is confirmed!');
        
        return redirect()->route('index');
    }

    public function basketAdd($productId){
        $orderId = session('orderId');
        if (is_null($orderId))
        {
            $order = $this->createOrder();
        } else {
            $order = Order::find($orderId);
        }
        if($order->products->contains($productId)) {
            $pivotRow = $order->products()->where('product_id',$productId)->first()->pivot;
            $pivotRow->count++;
            $pivotRow->update();
        } else {
            $order->products()->attach($productId);
        }
        
        $product = Product::find($productId);
        session()->flash('successAdded', $product->name);
        
        return redirect()->route('basket');  
    }

    public function basketRemove($productId){
        $orderId = session('orderId');
        if (is_null($orderId))
        {
            return view('basket', compact('order'));
        }
        $order = Order::find($orderId);

        if($order->products->contains($productId)) {
            $pivotRow = $order->products()->where('product_id',$productId)->first()->pivot;
            if($pivotRow->count < 2) {
                $order->products()->detach($productId);
            } else {
                $pivotRow->count--;
                $pivotRow->update();
            }
        }

        $product = Product::find($productId);
        session()->flash('successRemove', $product->name);
        
        return redirect()->route('basket');  
    }

    private function createOrder(){
        $orders = Order::get();
        if(count($orders) == 0)
        {
            $orderDescription = ['numberOfOrder' =>  "order".(strval(random_int(1,10)))];
        }
        else
        {
            $ordersArray = $orders[count($orders)-1]->toArray();
            $numberOfLastOrder = $ordersArray["numberOfOrder"];
    
            $orderDescription = ['numberOfOrder' =>  $numberOfLastOrder.(strval(random_int(1,10)))];
        }
        $order = Order::create($orderDescription);
        session(['orderId' => $order->id]);
        return $order; 
    }
}
