<?php

namespace App\Http\Controllers\media;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Image;

class ImageController extends Controller
{
    public function index()
    {
        $images = Image::all();
        return view('dash.components.photo.show', compact('images'));
    }

    public function create()
    {
        return view('create-image');
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'caption' => 'nullable|string|max:200',
        ]);

        // $imagePath = $request->file('image')->store('public');
        $imagePath = $request->file('image')->store('/user_id', 'document_uploads');


        Image::create([
            'path' => $imagePath,
            'caption' => $request->caption,
        ]);

        return redirect()->route('media.index')->with('success', 'Image uploaded successfully');
    }
}
