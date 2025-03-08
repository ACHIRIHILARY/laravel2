<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function login(Request $request)
    {
        $logindata = $request->validate([
            "name" => ["required"],
            "password" => ["required"],
        ]);
        if (auth()->attempt(['name' => $logindata['name'], 'password' => $logindata['password']])) {
            $request->session()->regenerate();
            return redirect('/');
        } else {
            return redirect('/');
        }
    }
    public function logout()
    {
        auth()->logout();
        return redirect('/');
    }
    public function register(Request $Request)
    {
        $data = $Request->validate([
            "name" => ["required", "min:3", "max:20", Rule::unique('users', 'name')],
            "email" => ["required", "email", Rule::unique('users', 'email')],
            "password" => ["required", "min:8", "max:20"],
        ]);
        $data['password'] = bcrypt($data['password']);
        $user = User::create($data);
        auth()->login($user);
        return redirect('/');
    }
}
