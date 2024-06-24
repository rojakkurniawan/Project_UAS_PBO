<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index()
    {
        $product = Product::all();

        return view('home', compact('product'));
    }

    public function show($id)
    {
        // $product = Product::where('id_product', $id)
        // ->with('uniqProduct')
        // ->first();

        $product = DB::table('uniq_product')
        ->join('product', 'uniq_product.id_product', '=', 'product.id_product')
        ->where('uniq_product.id_product', $id)
        ->select('uniq_product.*', 'product.*')
        ->get();

        return view('product', compact('product'));
    }
}
