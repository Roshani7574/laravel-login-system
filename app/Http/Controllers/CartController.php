<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class CartController extends Controller
{

    // Show cart
    public function index()
    {
        $cart = session()->get('cart', []);

        return view('frontend.cart', compact('cart'));
    }

    // Add to cart
    public function add($id, Request $request)
    {
        $product = Product::findOrFail($id);

        $cart = session()->get('cart', []);

        if(isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                "name" => $product->name,
                "price" => $product->price,
                "quantity" => 1,
                "size" => $request->size ?? 'M',
                "image" => $product->image
            ];
        }

        session()->put('cart', $cart);

        return redirect('/cart');
    }

    // Increase quantity
    public function increase($id)
    {
        $cart = session()->get('cart', []);

        if(isset($cart[$id])) {
            $cart[$id]['quantity']++;
            session()->put('cart', $cart);
        }

        return redirect('/cart');
    }

    // Decrease quantity
    public function decrease($id)
    {
        $cart = session()->get('cart', []);

        if(isset($cart[$id])) {

            if($cart[$id]['quantity'] > 1){
                $cart[$id]['quantity']--;
            } else {
                unset($cart[$id]); // remove if 1
            }

            session()->put('cart', $cart);
        }

        return redirect('/cart');
    }

    // Remove item
    public function remove($id)
    {
        $cart = session()->get('cart', []);

        if(isset($cart[$id])) {
            unset($cart[$id]);
            session()->put('cart', $cart);
        }

        return redirect('/cart');
    }

    // Checkout page
    public function checkout()
    {
        return view('frontend.checkout');
    }

}
