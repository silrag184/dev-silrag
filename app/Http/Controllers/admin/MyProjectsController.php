<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\MyProjects;
use App\Models\Profile;
use Illuminate\Http\Request;

class MyProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.my-project.index',[
            'profiles' => Profile::first(),
            'myProjects' => MyProjects::all(),
            'categories' => Category::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.my-project.add',[
            'profiles'=>Profile::first(),
            'categories' => Category::where('status', 1)->get(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        MyProjects::saveMyProject($request);
        return redirect('/myProject')->with('message','Project has been Uploaded Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        MyProjects::projectStatus($id);
        return back()->with('message','Project Status Updated Successfully');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('admin.my-project.edit',[
            'profiles' => Profile::first(),
            'myProject' => MyProjects::find($id),
            'categories' => Category::where('status', 1)->get(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        MyProjects::updateMyProject($request, $id);
        return redirect('/myProject')->with('message','Project Info Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        MyProjects::deleteProjectInfo($id);
        return back()->with('message','Project Info Deleted Successfully');
    }
}
