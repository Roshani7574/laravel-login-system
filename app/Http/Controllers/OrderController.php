<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function place()
{
    session()->forget('cart');

    return redirect()->route('success');
}


}
