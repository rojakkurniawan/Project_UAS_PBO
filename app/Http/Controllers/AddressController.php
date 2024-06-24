<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AddressController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        $userId = $user->id;

        $addresses = DB::table('address')
            ->where('id', $userId)
            ->get();

        if ($addresses->isEmpty()) {
            $addresses = null;
        } else {
            return redirect()->route('confirm');
        }

        // Mengirim data ke view
        return view('address', compact('addresses'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:15',
            'address' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'provincy' => 'required|string|max:255',
            'postal-code' => 'required|string|max:10',
            'country' => 'required|string|max:255',
        ]);

        $address = new Address();
        $address->user_id = Auth::id();
        $address->name = $request->input('name');
        $address->phone = $request->input('phone');
        $address->address = $request->input('address');
        $address->city = $request->input('city');
        $address->provincy = $request->input('provincy');
        $address->postal_code = $request->input('postal-code');
        $address->country = $request->input('country');
        $address->save();

        return redirect()->route('home')->with('success', 'Address has been entered');
    }
}
