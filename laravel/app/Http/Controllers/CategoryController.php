<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\Validator; // Import the Validator class

class CategoryController extends Controller
{
    // Get /api/categories
    public function getCategories()
    {
        return response()->json(Category::all());
    }

    // Post /api/categories
    public function createCategory(Request $request)
    {
        // **VALIDATION:** Add this block to validate the request data
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255|unique:categories,name',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422); // Return 422 on validation failure
        }

        $category = Category::create($request->all());
        return response()->json(["message" => "Category created successfully", "category" => $category], 201);
    }

    // Get /api/categories/{categoryId}
    public function getCategory($categoryId)
    {
        $category = Category::find($categoryId);

        if (!$category) {
            return response()->json(["message" => "Category not found"], 404);
        }

        return response()->json($category);
    }

    // Patch /api/categories/{categoryId}
    public function updateCategory(Request $request, $categoryId)
    {
        $category = Category::find($categoryId);

        if (!$category) {
            return response()->json(["message" => "Category not found"], 404);
        }

         // **VALIDATION:** Add validation for the update as well
        $validator = Validator::make($request->all(), [
            'name' => 'string|max:255|unique:categories,name,' . $categoryId, // Exclude the current category ID
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $category->update($request->all());

        return response()->json(["message" => "Category updated successfully", "category" => $category]);
    }

    // Delete /api/categories/{categoryId}
    public function deleteCategory($categoryId)
    {
        $category = Category::find($categoryId);

        if (!$category) {
            return response()->json(["message" => "Category not found"], 404);
        }

        $category->delete();

        return response()->json(["message" => "Category deleted successfully"]);
    }
}
