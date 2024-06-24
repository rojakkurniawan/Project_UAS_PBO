<?php

namespace App\Http\Controllers;

use App\Models\Product;

class HomeController extends Controller
{
    public function index()
    {
        $product = Product::all();

        return view('home', compact('product'));
    }
}
