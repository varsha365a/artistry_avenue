<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


class AdminController extends Controller
{
    public function showLoginForm()
    {
        return view('admin.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('username', 'password');

        if (Auth::guard('admin')->attempt($credentials)) {
            // Authentication passed...
            return redirect()->intended('index');
        }

        return redirect()->back()->withInput()->withErrors(['loginError' => 'Invalid credentials']);
    }

    public function createAdmin(Request $request)
{
    $request->validate([
        'username' => 'required|unique:admins,username',
        'password' => 'required|min:8|confirmed',
    ]);

    $admin = new Admin();
    $admin->username = $request->username;
    $admin->password = Hash::make($request->password);
    $admin.save();

    return redirect()->route('admin.login');
}

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect('/admin/login');
    }
}
