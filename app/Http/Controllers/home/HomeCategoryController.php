<?php

namespace App\Http\Controllers\home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\View;



class HomeCategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();

        return view('home.components.categories.index',compact('categories'));
    }
}
