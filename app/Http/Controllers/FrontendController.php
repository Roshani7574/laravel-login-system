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
        $product = Product::find($id);

        if (!$product) {
            abort(404);
        }

        return view('frontend.product_detail', compact('product'));
    }
}
