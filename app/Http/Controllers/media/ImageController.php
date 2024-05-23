<?php

namespace App\Http\Controllers\media;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Image;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image as ImageFacade;




class ImageController extends Controller
{
    public function index()
    {
        $images = Image::all();
        return view('dash.components.photo.show', compact('images'));

    }

    public function store(Request $request)
    {
        if ($request->hasFile('image')) {
            $uploadedImage = $request->file('image');
            $imageName = time() . '.webp';
        
            // Save the image as WebP format
            $image = ImageFacade::make($uploadedImage)->encode('webp', 75)->save(public_path("images/" . $imageName));
        
            // Save the image record in the database with the image path
            $imageRecord = new Image(); // Replace with your actual model name
            $imageRecord->path = asset('images/' . $imageName); // Use asset() to get the full URL
            $imageRecord->save();
        
            return redirect()->back()->with('success', 'تم رفع الصورة بنجاح.');
        }
        
        return redirect()->back()->with('error', 'يرجى تحديد صورة للرفع.');        
    }


    public function show($id)
    {
        $imageRecord = Image::find($id); // تستبدل $id بمعرف السجل الذي تريد قراءة الرابط الخاص به
        $imagePath = $imageRecord->path;

        $image = ImageFacade::make($imagePath);

        return view('dash.components.photo.index',compact('image'));

    }

}
