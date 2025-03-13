<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function getCategories()
    {
        return response()->json(['message' => 'Getting list of categories']);
    }

    public function createCategory()
    {
        return response()->json(['message' => 'Creating 1 new category'], 201);
    }

    public function getCategory($categoryId)
    {
        return response()->json(['message' => "Getting 1 category based on given categoryId: $categoryId"]);
    }

    public function updateCategory(Request $request, $categoryId)
    {
        return response()->json(['message' => "Updating 1 category based on given categoryId: $categoryId"]);
    }

    public function deleteCategory($categoryId)
    {
        return response()->json(['message' => "Deleting 1 category based on given categoryId: $categoryId"], 200);
    }
}
