<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public $product;
    public function home ()
    {
        return view('front.home.home', [
            'products'=>Product::latest()->take(4)->get(),
        ]);
    }
    public function details ($id)
    {
        $this->product = Product::find($id);
        return view('front.product.details', [
           'product' => $this->product
        ]);
    }
}
