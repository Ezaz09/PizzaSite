<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
        $products = Product::get();
        return view('index', compact('products'));
    }

    public function categories(){
        return view('categories');
    }

    public function pizza($id){
        $product = Product::where('id', $id)->first();
        return view('pizza',compact('product'));
    }

}  
