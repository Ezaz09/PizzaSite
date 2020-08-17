<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['idOfUser', 'numberOfOrder', 'name', 'surname', 'deliveryAddress'];

    public function products(){
        return $this->belongsToMany(Product::class)->withPivot('count')->withTimestamps();
    }
    
    public function basket($id){
        $product = Product::where('id', $id)->first();
        return view('basket',compact('product'));
    }

    public function calculateTotalPriceForOrder(){
        $sum = 0;
        $priceForDelivery = 10;
        foreach($this->products as $product) {
            $sum += $product->getPriceForCount();
        }
        return $sum+$priceForDelivery;
    }

    public function saveOrder($idOfuser, $name, $surname, $deliveryAddress)
    {
        $this->idOfUser = $idOfuser;
        $this->name = $name;
        $this->surname = $surname;
        $this->deliveryAddress = $deliveryAddress;
        $this->totalPrice = $this->calculateTotalPriceForOrder();
        $this->save();

        session()->forget('orderId');
    }
}
