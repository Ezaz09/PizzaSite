<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Services\CurrencyConvertion;

class Product extends Model
{
    protected $fillable = ['name', 'price', 'description', 'srcOfImage'];

    public function getPriceForCount() {
        if(!is_null($this->pivot)){
            return $this->pivot->count * $this->price;
        }
       return $this->price;
    }

    public function getPriceAttribute($value)
    {
       return round(CurrencyConvertion::convert($value), 2);
    }

}
