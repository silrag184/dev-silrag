<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\BlogCategory;
use App\Models\Profile;
use Illuminate\Http\Request;

class BlogCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.blog-category.index',[
            'blogCategories' => BlogCategory::all(),
            'profiles' => Profile::first(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.blog-category.add',[
            'profiles' => Profile::first(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        BlogCategory::newBlogCategory($request);
        return redirect('/blog-category')->with('message','Blog Category Added Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        BlogCategory::blogCategoryStatus($id);
        return back()->with('message','Blog Category Status Updated Successfully');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('admin.blog-category.edit',[
            'blogCategory' => BlogCategory::find($id),
            'profiles' => Profile::first(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        BlogCategory::updateBlogCategory($request, $id);
        return redirect('blog-category')->with('message','Blog Category Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        BlogCategory::deleteBlogCategory($id);
        return back()->with('message','Blog Category Deleted Successfully');
    }
}
