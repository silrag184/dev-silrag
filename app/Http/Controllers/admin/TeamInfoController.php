<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Profile;
use App\Models\TeamInfo;
use Illuminate\Http\Request;

class TeamInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.my-team.index',[
            'profiles' => Profile::first(),
            'teams' => TeamInfo::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.my-team.add',[
            'profiles' => Profile::first()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        TeamInfo::saveTeamInfo($request);
        return redirect('/team')->with('message','Team Info Added Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        TeamInfo::infoStatus($id);
        return back()->with('message','Team Info Status Updated Successfully');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('admin.my-team.edit',[
            'profiles' => Profile::first(),
            'team' => TeamInfo::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        TeamInfo::updateTeamInfo($request, $id);
        return redirect('/team')->with('message','Team Info Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        TeamInfo::deleteTeamInfo($id);
        return back()->with('message','Team Info Deleted Successfully');
    }
}
