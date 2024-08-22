<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Education;
use App\Models\Profile;
use Illuminate\Http\Request;

class EducationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.education.index',[
            'educations' => Education::all(),
            'profiles' => Profile::first(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.education.add',[
            'profiles' => Profile::first(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Education::saveEducation($request);
        return redirect('/education')->with('message','Educational Qualification Added Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('admin.education.edit',[
            'education' => Education::find($id),
            'profiles' => Profile::first()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Education::updateEducation($request, $id);
        return redirect('/education')->with('message','Education Indo Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Education::removeEducation($id);
        return back()->with('message','Education Info deleted Successfully');
    }
}
