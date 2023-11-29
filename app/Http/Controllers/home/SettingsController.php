<?php

namespace App\Http\Controllers\home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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
        $validated = $request->validate([
            //blade data in db
            'site_name' => 'required',
            'about' => 'required',
            'icon_url' => 'required|mimes:jpg,png,jpeg|max:5048',

        ]);
        
        //These instructions are responsible for saving images in public/assets/img/offers folder
        $newImageName = time() . $request->name . '.' .
        $request->icon_url->extension();
        $request->icon_url->move(public_path('../storage/img/icons'), $newImageName);
        DB::table('settings')->insert([
            'site_name' => $request->site_name ,
            // 'id'=> Auth::user()->id ,
            'about'=> $request->about,
            'icon_url' => asset('/storage/img/icons') . '/' . $newImageName,
        ]);
        return redirect()->route('home');
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
