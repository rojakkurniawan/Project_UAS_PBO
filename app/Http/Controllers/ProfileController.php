<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class ProfileController extends Controller
{
    public function profile()
    {
        return view('profile');
    }

    public function updateProfile(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'current_password' => 'required',
            'new_password' => 'required|min:3|confirmed',
        ]);

        $id = Auth::id();
        $user = User::find($id);

        if (!Hash::check($request->current_password, $user->password)) {
            return back()->withErrors(['current_password' => 'Current password does not match']);
        }

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->new_password);
        $user->save();

        return back()->with('status', 'Profile successfully updated');
    }
}