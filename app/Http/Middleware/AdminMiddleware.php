<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
<<<<<<< HEAD

=======
use App\Models\User;
>>>>>>> d024ab1 (Update project: Like a E-commerce website)

class AdminMiddleware
{
    public function handle(Request $request, Closure $next)
    {
       if (Auth::check() && Auth::user()->role === 'admin') {

            return $next($request);
        }

        return redirect('/login');
    }
<<<<<<< HEAD
=======
    public function dashboard()
{
    $users = User::all();   // fetch all users

    return view('admin', compact('users'));
}

>>>>>>> d024ab1 (Update project: Like a E-commerce website)
}
