<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\UserRegister;
use App\Models\UserProfile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function showRegistrationForm()
    {
        return view('admin.register');
    }

    public function register(UserRegister $request)
    {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);
        if($user) {
            UserProfile::create(
                [
                    'user_id' => $user->id,
                    'name' => $user->name
                ]
            );
            $user->assignRole('admin');
        }
        return redirect()->route('register')->with('success', 'User Created Successfully \n Password: '.$request->password);

    }
}
