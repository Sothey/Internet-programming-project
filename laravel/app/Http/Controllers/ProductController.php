<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function getProducts()
    {
        return Product::all();
    }

      // --- Post /api/products
    public function createProduct(Request $request) {
        $product = new Product;
        $product->name = $request->name;
        $product->category_id = $request->category_id;
        $product->pricing = $request->pricing;
        $product->save();
        return $product;    
    }

    public function getProduct($productId)
    {
        return Product::findOrFail($productId);
    }

    public function updateProduct(Request $request, $productId)
    {
        $product = Product::findOrFail($productId);
        $product->update($request->all());
        return $product;
    }

    public function deleteProduct($productId)
    {
        return Product::destroy($productId);
    }

    public function index()
    {
        return Product::all();
    }
}