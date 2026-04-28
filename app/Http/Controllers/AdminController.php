<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Product;
use App\Models\Category;
class AdminController extends Controller
{
      public function dashboard()
    {
        $users = User::count();
        $products = Product::count();
        $categories = Category::count();

        return view('admin.dashboard', compact('users', 'products', 'categories'));
    }
}
