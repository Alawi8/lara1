<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\User ;
use App\Http\Requests\CreateCateguryRequest ;


class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        return view('dash.components.categories.index')->with('categuries', Category::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function create()
    {
        return view('dash.components.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     */
    public function store(CreateCateguryRequest $request)
    {
        // $this->validate($request , [
        //     'name'  => 'required|unique:categuries',
        // ]);
        $ncategory = new Category() ;
        Category::create([
            'name'=>$request->name ,
        ]);
        session()->flash('success', 'categuries created succesfully');
        return redirect(route('category.index'));
    }

    /**
     * Display the specified resource.
     *
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
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
