<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\Category;
use App\Models\Profile;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.blog.index',[
            'blogs' => Blog::all(),
            'blogCategory' => BlogCategory::all(),
            'profiles' => Profile::first(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.blog.add',[
            'blogCategories' => BlogCategory::where('status', 1)->get(),
            'profiles' => Profile::first(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Blog::newBlog($request);
        return redirect('/blog')->with('message', 'Blog Uploaded Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        Blog::blogStatus($id);
        return back()->with('message','Blog Status Updated Successfully');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('admin.blog.edit',[
            'blog' => Blog::find($id),
            'blogCategories' => BlogCategory::where('status', 1)->get(),
            'profiles' => Profile::first(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Blog::updateBlog($request, $id);
        return redirect('blog')->with('message','Blog Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Blog::deleteBlog($id);
        return back()->with('message','Blog Deleted Successfully');
    }
}
