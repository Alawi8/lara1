<?php

namespace App\Http\Controllers\home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Setting;

class SettingsController extends Controller
{
    /**
     */
    public function index()
    {
        return view('home/components/settings/create');
    }

    /**
     * Show the form for creating a new resource.
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
        // Validate the request
        $validated = $request->validate([
            'site_name' => 'required',
            'about' => 'required',
            'icon_url' => 'required|mimes:jpg,png,jpeg|max:5048',
        ]);
    
        // Check if the user is authenticated
        if (!Auth::check()) {
            // Handle unauthenticated user
            return redirect()->route('login')->with('error', 'Unauthorized access');
        }
    
        // Check if the file upload was successful
        if ($request->file('icon_url')->isValid()) {
            // Generate a unique name for the image
            $newImageName = time() . $request->site_name . '.' . $request->icon_url->extension();
    
            // Move the uploaded file to the storage directory
            $request->icon_url->move(public_path('../storage/img/icons'), $newImageName);
    
            // Create a new record in the 'settings' table
            Setting::create([
                'site_name' => $request->site_name,
                'about' => $request->about,
                'icon_url' => asset('/storage/img/icons') . '/' . $newImageName,
            ]);
    
            return redirect()->route('home')->with('success', 'Settings updated successfully');
        }
    
        // Handle file upload failure
        return back()->withErrors(['file' => 'File upload failed.'])->withInput();
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $siteName = "Your Site Name"; // Replace with the actual variable assignment
        $about = "Some information about your site"; // Replace with the actual variable assignment
        $iconUrl = "path/to/icon.jpg"; // Replace with the actual variable assignment
    
        return view('profile', compact('siteName', 'about', 'iconUrl'));
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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
    }
}
