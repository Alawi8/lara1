<?php

namespace App\Http\Controllers\category;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Validator;


class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::paginate(10);
        return View::make('dash.components.categories.index')->with('categuries', $categories);
    }

    public function create()
    {
        return view('dash.components.categories.create');
    }


    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'title' => 'required|string',
        ]);

        if ($validator->fails()) {
            return redirect()->route('category.create') // replace 'your.route.name' with the actual route name or URL
                ->withErrors($validator)
                ->withInput($request->all());
        }

        Category::create($request->all());

        return redirect()->route('category.index')->with('success', 'Category added successfully!');
    }


    public function edit(Category $category)
    {
        return view('dash.components.categories.edit', compact('category'));
    }

    public function update(Request $request, Category $category)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $category->update($request->all());

        return redirect()->route('category.index')->with('success', 'Category updated successfully!');
    }

    public function destroy(Category $category)
    {
        $category->delete();

        return redirect()->route('category.index')->with('success', 'Category deleted successfully!');
    }
}
