<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $products = Product::get();
        return view('products.index', compact('products'));
    }

    public function create(Request $request)
    {
       return view('products.create');
    }

    public function store(Request $request)
    {
       $request->validate([
        "name" => "required",
        "detail" => "required",
       ]);

       Product::create([
        "name" => $request->name,
        "detail" => $request->detail
       ]);

       return redirect()->route('products.index')
       ->with('success', 'Product created successfully');
    }

    public function show(Product $product)
    {
        return view('products.show', compact('product'));
    }

    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }

    public function update(Request $request, Product $product)
    {
       $request->validate([
        "name" => "required",
        "detail" => "required",
       ]);

        $product->update([
        "name" => $request->name,
        "detail" => $request->detail
       ]);

       return redirect()->route('products.index')
       ->with('success', 'Product updated successfully');
    }

    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('products.index')
       ->with('success', 'Product deleted successfully');
    }
}
