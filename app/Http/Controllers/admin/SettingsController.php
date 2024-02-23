<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Artisan;


class SettingsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        Artisan::call('db:seed', ['--class' => 'SettingsTableSeeder']);


        $settings = Setting::all();
        return view('dash.components.setting.edit',compact('settings'))->with('message', 'Seeder executed successfully');
    }

    /**
     
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required',
            'author' => 'required',
            'about' => 'required|max:25000',
            'icon_url' => 'required|mimes:jpg,png,jpeg|max:5048',
        ]);
    
        $newImageName = time() . $request->name . '.' .
        $request->icon_url->extension();
        $request->icon_url->move(public_path('storage/img/icons'), $newImageName);
    
        Setting::create([
            'title' => $request->title,
            'author' => Auth::user()->id,
            'about' => $request->about,
            'icon_url' => asset('/storage/img/icons') . '/' . $newImageName,
        ]);
    
        return redirect()->route('posts.index');
    }
    

    /**
     * Display the specified resource.
     
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     
     */

     public function update(Request $request, $id)
     {
         try {
             // التحقق من وجود السجل
             $setting = Setting::findOrFail($id);
     
             // تحديث الحقول بناءً على بيانات الطلب
             $setting->site_name = $request->input('site_name');
             $setting->about = $request->input('about');
     
             // التحقق من وجود صورة قبل التحديث
             if ($request->hasFile('icon_url')) {
                 // قم بمعالجة الصورة وحفظها في المسار المناسب
                 $imagePath = $request->file('icon_url')->store('profile_pictures', 'public');
     
                 // قم بتحديث حقل الصورة في الجدول
                 $setting->icon_url = $imagePath;
             }
     
             // حفظ التغييرات
             $setting->save();
     
             // إعادة توجيه أو إرجاع رد بناءً على الاحتياجات الخاصة بك
             return redirect()->route('settings.index')->with('success', 'تم تحديث الملف الشخصي بنجاح');
         } catch (\Exception $e) {
             // التعامل مع الأخطاء
             return redirect()->route('settings.index')->with('error', 'حدث خطأ أثناء تحديث الملف الشخصي');
         }
     }
     
    

    /**
     * Remove the specified resource from storage.
     
     */
    public function destroy($id)
    {
        //
    }
}
