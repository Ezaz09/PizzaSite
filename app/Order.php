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
        foreach($this->products as $product) {
            $sum += $product->getPriceForCount();
        }
        return $sum+10;
    }

    public function saveOrder($name, $surname, $deliveryAddress)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->deliveryAddress = $deliveryAddress;
        $this->save();

        session()->forget('orderId');
    }
}
