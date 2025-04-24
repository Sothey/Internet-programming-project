<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    // Get /api/products
    public function getProducts()
    {
        return response()->json(Product::all());
    }

    // Post /api/products
    public function createProduct(Request $request)
    {
        try {
            $validated = $request->validate([
                'name' => 'required|string|max:255',
                'pricing' => 'required|numeric|min:0',
                'category_id' => 'required|exists:categories,id',
                'description' => 'nullable|string',
                'images' => 'nullable|json',
            ]);

            $product = Product::create($validated);
            return response()->json(["message" => "Product created successfully", "product" => $product], 201);
        } catch (\Exception $e) {
            return response()->json(["message" => "Failed to create product", "error" => $e->getMessage()], 422);
        }
    }

    // Get /api/products/{productId}
    public function getProduct($productId)
    {
        $product = Product::find($productId);

        if (!$product) {
            return response()->json(["message" => "Product not found"], 404);
        }

        return response()->json($product);
    }

    // Patch /api/products/{productId}
    public function updateProduct(Request $request, $productId)
    {
        $product = Product::find($productId);

        if (!$product) {
            return response()->json(["message" => "Product not found"], 404);
        }

        try {
            $validated = $request->validate([
                'name' => 'sometimes|string|max:255',
                'pricing' => 'sometimes|numeric|min:0',
                'category_id' => 'sometimes|exists:categories,id',
                'description' => 'nullable|string',
                'images' => 'nullable|json',
            ]);

            $product->update($validated);
            return response()->json(["message" => "Product updated successfully", "product" => $product]);
        } catch (\Exception $e) {
            return response()->json(["message" => "Failed to update product", "error" => $e->getMessage()], 422);
        }
    }

    // Delete /api/products/{productId}
    public function deleteProduct($productId)
    {
        $product = Product::find($productId);

        if (!$product) {
            return response()->json(["message" => "Product not found"], 404);
        }

        $product->delete(); // This will soft delete the product due to SoftDeletes trait
        return response()->json(["message" => "Product deleted successfully"]);
    }
}