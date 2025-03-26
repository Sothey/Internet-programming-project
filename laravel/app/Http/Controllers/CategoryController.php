<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function getCategories()
    {
        return Category::all();
    }

    public function createCategory(Request $request) 
    {
        $category = Category::create([
            'name' => $request->name,
        ]);
        $category->save();
        return $category;
    }

    public function getCategory($categoryId)
    {
        return response()->json(['message' => "Getting 1 category based on given categoryId: $categoryId"]);
    }

    public function updateCategory(Request $request, $categoryId)
    {
        $category = Category::find($categoryId);
        $category->name = $request->name;
        $category->save();
        return $category;
    }
    public function deleteCategory(Request $request, $categoryId)
    {
        $category = Category::find($categoryId);
        $category->delete();
        return $category;
    }
    public function index()
    {
        return Category::all();
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $category = Category::create($validated);

        return response()->json($category, 201);
    }
}
