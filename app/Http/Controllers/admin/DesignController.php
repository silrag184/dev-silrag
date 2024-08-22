<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Design;
use App\Models\Profile;
use Illuminate\Http\Request;

class DesignController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.design.index',[
            'profiles' => Profile::first(),
            'designs' => Design::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.design.add',[
            'profiles' => Profile::first()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Design::saveDesignSkillInfo($request);
        return redirect('/design')->with('message','Design Info Added Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        Design::skillStatus($id);
        return back()->with('message','Design Skill Status Updated Successfully');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('admin.design.edit',[
            'design' => Design::find($id),
            'profiles' => Profile::first()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Design::updateDesignSkillInfo($request, $id);
        return redirect('/design')->with('message','Design Info Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Design::deleteDesignSkillInfo($id);
        return back()->with('message','Design Info Deleted Successfully');
    }
}
