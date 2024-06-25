<?php

namespace App\Http\Controllers;

use App\Models\Product;

class ConfirmController extends Controller
{
    public function index()
    {
        $products = Product::paginate(6);

        return view('confirm', compact('products'));
    }
}
