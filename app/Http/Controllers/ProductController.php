<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function list()
    {
    $products = [
        ['name' => 'Laptop', 'price' => 15000000],
        ['name' => 'Chuột', 'price' => 500000],
        ['name' => 'iPhone', 'price' => 25000000],
    ];

    return view('products', compact('products'));
    }
}
