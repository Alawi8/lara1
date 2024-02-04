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

    public function create()
    {
        return view('create-image');
    }

    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
    //         'caption' => 'nullable|string|max:200',
    //     ]);

    //     // $imagePath = $request->file('image')->store('public');
    //     $imagePath = $request->file('image')->store('user_id/', 'document_uploads');


    //     Image::create([
    //         'path' => $imagePath,
    //         'caption' => $request->caption,
    //     ]);

    //     return redirect()->route('media.index')->with('success', 'Image uploaded successfully');
    //     // return redirect()-> view('dash.components.photo.show')->with('success' , 'Image uploaded successfully');
    // }

    public function store(Request $request)
    {
        if ($request->hasFile('image')) {
            $uploadedImage = $request->file('image');
            $imageName = time() . '.' . $uploadedImage->getClientOriginalExtension();
            $uploadedImage->storeAs('public/images', $imageName);
            $imagePath = storage_path("app/public/images/{$imageName}");
    
            // حفظ السجل في قاعدة البيانات مع رابط الصورة
            $imageRecord = new Image(); // قم بتعديل النموذج إلى اسم النموذج الخاص بك
            $imageRecord->path = asset('storage/images/' . $imageName); // استخدام asset() للحصول على الرابط الكامل
            $imageRecord->save();
    
            $image = ImageFacade::make($imagePath);
            return redirect()->back()->with('success', 'تم رفع الصورة بنجاح.');
        }
    
        return redirect()->back()->with('error', 'يرجى تحديد صورة للرفع.');
    }
    
}
