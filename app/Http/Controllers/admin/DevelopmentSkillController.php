<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Development;
use App\Models\Profile;
use Illuminate\Http\Request;

class DevelopmentSkillController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.development.index',[
            'profiles' => Profile::first(),
            'developments' => Development::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.development.add',[
            'profiles' => Profile::first()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Development::saveDevelopmentSkillInfo($request);
        return redirect('/development')->with('message','Development Skill Info Added Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        Development::skillStatus($id);
        return back()->with('message','Development Skill Status Updated Successfully');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('admin.development.edit',[
            'development' => Development::find($id),
            'profiles' => Profile::first()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Development::updateDevelopmentSkillInfo($request, $id);
        return redirect('/development')->with('message','Development Skill Info Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Development::deleteDevelopmentSkillInfo($id);
        return back()->with('message','Development Skill Info Deleted Successfully');
    }
}
