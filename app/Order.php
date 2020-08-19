<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Services\CurrencyConvertion;

class Order extends Model
{
    protected $fillable = ['user_id', 'numberOfOrder', 'name', 'surname', 'deliveryAddress'];

    public function products(){
        return $this->belongsToMany(Product::class)->withPivot('count')->withTimestamps();
    }
    
    public function basket($id){
        $product = Product::where('id', $id)->first();
        return view('basket',compact('product'));
    }

    public function calculateTotalPriceForOrder(){
        $sum = 0;
        $priceForDelivery = $this->getPriceForDelivery();
        foreach($this->products as $product) {
            $sum += $product->getPriceForCount();
        }
        return $sum+$priceForDelivery;
    }

    public function saveOrder($userId, $name, $surname, $deliveryAddress)
    {
        $this->user_id = $userId;
        $this->name = $name;
        $this->surname = $surname;
        $this->deliveryAddress = $deliveryAddress;
        $this->totalPrice = $this->calculateTotalPriceForOrder();
        $this->currencyOfOrder = session('currencySymbol', '$');
        $this->save();

        session()->forget('orderId');
        session()->forget('countOfProduct');
    }

    public function getPriceForDelivery()
    {
        if(session('currency', 'USD') == 'USD')
        {
            return 10;
        }
        else 
        {
            return round(CurrencyConvertion::convert(10),2);
        }
    }
}
