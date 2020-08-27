<?php

namespace App\Http\Controllers;

use App\Product;
use App\Currency;
use App\Http\Resources\Product as ProductResources;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        //$products = Product::paginate();
        //return ProductResources::collection($products);
        $products = Product::get();
        return view('index', compact('products'));
    }

    public function pizza($id){
        $product = Product::where('id', $id)->first();
        return view('pizza',compact('product'));
    }

    public function changeCurrency($currencyCode)
    {
        $currency = Currency::byCode($currencyCode)->firstOrFail();
        session(['currency' => $currency->code]);
        session(['currencySymbol' => $currency->symbol]);
        return redirect()->back();
    }
}  
