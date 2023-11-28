<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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
        //
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
