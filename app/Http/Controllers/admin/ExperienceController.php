<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Experience;
use App\Models\Profile;
use Illuminate\Http\Request;

class ExperienceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.experience.index',[
            'profiles'=> Profile::first(),
            'experiences' => Experience::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.experience.add',[
            'profiles' => Profile::first()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Experience::saveExperienceInfo($request);
        return redirect('/experience')->with('meessage','Experience Info Added Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        Experience::expeienceStatus($id);
        return back()->with('message','Experience Status Updated Successfully');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('admin.experience.edit',[
            'profiles' => Profile::first(),
            'experience' => Experience::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Experience::updateExperienceInfo($request, $id);
        return redirect('/experience')->with('message','Experience Info Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Experience::deleteExperienceInfo($id);
        return back()->with('message','Experience Info Deleted Successfully');
    }
}
