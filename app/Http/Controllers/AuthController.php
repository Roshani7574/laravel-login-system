<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
<<<<<<< HEAD
=======
use App\Models\Category;
use App\Models\Product;
>>>>>>> d024ab1 (Update project: Like a E-commerce website)

class AuthController extends Controller
{

    public function showRegister()
    {
        return view('register');
    }

    public function register(Request $request)
    {
        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>Hash::make($request->password),
            'role'=>'user'
        ]);

        return redirect('/login');
    }

    public function showLogin()
<<<<<<< HEAD
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email','password');

        if(Auth::attempt($credentials))
        {
            if(Auth::user()->role == 'admin')
            {
                return redirect('/admin');
            }

            return redirect('/dashboard');
        }

        return back()->with('error','Invalid credentials');
    }
    public function adminDashboard()
{
    $users = User::all();
    return view('admin', compact('users'));
}
=======
{
    return view('login');
}

 public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($request->only('email', 'password'))) {
            $request->session()->regenerate();

            if (Auth::user()->role === 'admin') {
                return redirect()->route('admin.dashboard');
            }

            return redirect()->route('home'); // frontend home
        }

        return back()->withErrors([
            'email' => 'Invalid credentials.',
        ])->onlyInput('email');
    }



    public function adminDashboard()
{
    $users = User::count();
    $categories = Category::count();
    $products = Product::count();

    return view('admin.dashboard', compact('users', 'categories', 'products'));
}

>>>>>>> d024ab1 (Update project: Like a E-commerce website)
public function showLoginForm()
    {
        return view('admin.login');
    }
<<<<<<< HEAD
     public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login');
    }
=======
     public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('home');
    }

>>>>>>> d024ab1 (Update project: Like a E-commerce website)
}
