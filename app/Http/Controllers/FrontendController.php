<?php
namespace App\Http\Controllers;

use App\Models\Product;

class FrontendController extends Controller
{
    public function index()
    {
        $products = Product::latest()->get();
        return view('frontend.index', compact('products'));
    }
     public function show($id)
{
    // Fetch **one product**, not all products
    $product = Product::findOrFail($id);

    return view('frontend.product_detail', compact('product'));
}
}
