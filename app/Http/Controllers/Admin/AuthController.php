<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Category;
use App\Models\Product;

class AuthController extends Controller
{

    public function showLoginForm()
    {
        return view('admin.login');
    }


    public function login(Request $request)
{
    $request->validate([
        'email' => 'required|email',
        'password' => 'required'
    ]);

    $credentials = $request->only('email','password');

    if (Auth::guard('admin')->attempt($credentials)) {

        return redirect('/admin/dashboard');

    }

    return back()->withErrors([
        'email' => 'Invalid Credentials'
    ]);
}


    public function adminDashboard()
    {

        $users = User::count();
        $categories = Category::count();
        $products = Product::count();

        return view('admin.dashboard', compact('users','categories','products'));
    }


    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login');
    }

}
