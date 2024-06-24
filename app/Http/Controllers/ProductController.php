<?php

namespace App\Http\Controllers;

use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $product = Product::all();

        return view('home', compact('product'));
    }

    public function show($id)
    {
        $product = Product::where('id_product', $id)->get();

        return view('product', compact('product'));
    }
}
