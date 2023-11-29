<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class SettingsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dash.components.setting.create');
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
            //blade data in db
            'title' => 'required',
            'auther' => 'required',
            'about' => 'required|max:25000',
            'icon_url' => 'required|mimes:jpg,png,jpeg|max:5048',

        ]);
        
        //These instructions are responsible for saving images in public/assets/img/offers folder
        $newImageName = time() . $request->name . '.' .
        $request->icon_url->extension();
        $request->icon_url->move(public_path('../storage/img/icons'), $newImageName);
        DB::table('settings')->insert([
            'title' => $request->title,
            'auther'=> Auth::user()->id ,
            'exept' => $request->exept,
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
