<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Stmt\Return_;
use Illuminate\Auth\Events\Validated;
use Illuminate\Support\Facades\DB;
use App\Models\Post;
use App\Models\User;
use SebastianBergmann\Type\TypeName;
use Barryvdh\Debugbar\Facades\Debugbar;
use App\Models\Page;

class AdminPagesController extends Controller
{
    # middleware 
    public function __construct()
    {
        $this->middleware(['checkRole', 'auth']);
    }
    /**
     * Display a listing of the resource.
     *
     **/
    public function index()
    {
        $page = Page::paginate(6);
        $arr = array('pages' => $page);
        return view('dash.components.page.display', $arr);

    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function create()
    {
        // Create a new resource with the specified
        return view('dash.components.page.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     */
    public function store(Request $request)
    {
        // validate parameters 
        $request->validate([
            'title' => 'required|max:60',
            'description' => 'required',
            'content' => 'required',
        ]);

        // create a new page 
        $page = Page::create([
            'title' => $request->title,
            'description' => $request->description,
            'content' => $request->content,
        ]);

        return redirect()->route('pages.index')->with('success', 'تم انشاء الصفحه بنجاح');
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
        // search date by id and return results to edit page 
        $edit = Page::where('id', $id)->first();
        return view('dash.components.page.edit', compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     */
    public function update(Request $request, $id)
    {
        // search rhe date by id and update 
        $page = Page::findOrFail($id);

        $request->validate([
            'title' => 'required|max:60',
            'description' => 'required',
            'content' => 'required',
        ]);

        $page->title = $request->title;
        $page->description = $request->description;
        $page->content = $request->content;
        $page->save();

        return redirect()->route('pages.index')->with('success', 'تم تعديل الصفحه بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     *
     */
    public function destroy($id)
    {
        // Remove the pages from database 
        $page = Page::findOrFail($id);
        $page->delete();
        return redirect()->route('pages.index')->with('success', 'تم حذف الصفحة بنجاح');
    }
}