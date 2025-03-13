<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function getProducts() {
        return Product::all();
    }

    public function createProduct(Request $request) {
        return Product::create($request->all());
    }

    public function getProduct($productId) {
        return Product::findOrFail($productId);
    }

    public function updateProduct(Request $request, $productId) {
        $product = Product::findOrFail($productId);
        $product->update($request->all());
        return $product;
    }

    public function deleteProduct($productId) {
        return Product::destroy($productId);
    }
}