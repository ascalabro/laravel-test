<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('products/index', compact('products'));
    }

    public function show(Product $product)
    {
        return $product;
    }

    public function update(Request $request, Product $product)
    {
        $product->update($request->post());

        return $product;
    }

    public function store(Request $request)
    {
        $product = Product::create($request->all());

        return $product;
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return $product;
    }
}
