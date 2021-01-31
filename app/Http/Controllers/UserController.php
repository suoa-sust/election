<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('admin.user.index')
            ->with('users', $users);
    }

    public function changePasswordForm()
    {
        return view('admin.user.change-password')
            ->with('title', 'Change Password');
    }

    public function changePassword(Request $request)
    {
        $validated = $request->validate([
            'password' => 'required|confirmed',
        ]);
        $user = Auth::user();
        $user->password = bcrypt($validated['password']);
        $user->save();
        return redirect()->route('dashboard')->with('success', 'Password Reset Success. <br> Passoword is '.$validated['password']);
    }
}
