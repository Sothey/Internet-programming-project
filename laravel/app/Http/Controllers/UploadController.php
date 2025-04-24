<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class UploadController extends Controller
{
    public function upload(Request $request)
    {
        // Validate the request (images only)
        $request->validate([
            'document' => 'required|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $image = $request->file('document');
        $fileName = uniqid() . '.' . $image->getClientOriginalExtension();

        // Store the original image
        $path = $image->storeAs('uploads', $fileName);

        // Create and store thumbnail using Intervention Image
        $thumbnailPath = 'public/thumbnails/' . $fileName;
        Image::make($image->getRealPath())
            ->fit(200, 200, function ($constraint) {
                $constraint->aspectRatio();
            })
            ->save(storage_path('app/' . $thumbnailPath));


        // Return paths as JSON response
        return response()->json([
            'original' => $path,
            'thumbnail' => 'storage/thumbnails/' . $fileName,
        ]);
    }
}