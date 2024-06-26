<?php

namespace App\Http\Controllers;

use App\Models\Address;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CheckOutController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $userId = $user->id;

        $addresses = DB::table('address')
            ->where('id', $userId)
            ->get();

        $there_has_address = $addresses->isEmpty() ? 0 : 1;

        return view('checkout', compact('addresses', 'there_has_address'));
    }

    public function show(Request $request)
    {
        $productName = $request->query('name');
        $productDescription = $request->query('description');
        $productUrlImage = $request->query('url_image');
        $productPrice = $request->query('price');

        $user = Auth::user();
        $userId = $user->id;

        $addresses = DB::table('address')
            ->where('id', $userId)
            ->get();

        $there_has_address = $addresses->isEmpty() ? 0 : 1;

        return view('checkout', compact('productName', 'productDescription', 'productUrlImage', 'productPrice', 'addresses', 'there_has_address'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:15',
            'address' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'province' => 'required|string|max:255',
            'postal_code' => 'required|string|max:10',
            'country' => 'required|string|max:255',
        ]);

        $address = new Address();
        $address->id = Auth::id();
        $address->name = $request->input('name');
        $address->phone = $request->input('phone');
        $address->address = $request->input('address');
        $address->city = $request->input('city');
        $address->province = $request->input('province');
        $address->postal_code = $request->input('postal_code');
        $address->country = $request->input('country');
        $address->save();

        return response()->json(['message' => 'Alamat has been registered.']);
    }
}
