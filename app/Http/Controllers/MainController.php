<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
        return view('index');
    }

    public function categories(){
        return view('categories');
    }

    public function pizza($product){
        Product::where('name', $product)->first();
        return view($product);
    }
}
