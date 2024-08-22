<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\MyServices;
use App\Models\Profile;
use Illuminate\Http\Request;

class MyServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.my-services.index',[
            'profiles' => Profile::first(),
            'myServices' => MyServices::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.my-services.add',[
            'profiles' => Profile::first(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        MyServices::saveMyServiceInfo($request);
        return redirect('/myService')->with('message', 'My Service Info Added Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        MyServices::myServiceStatus($id);
        return back()->with('message', 'My Service Info Status Updated Successfully');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('admin.my-services.edit',[
            'profiles' => Profile::first(),
            'myService' => MyServices::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        MyServices::updateMyServiceInfo($request, $id);
        return redirect('/myService')->with('message', 'My Service Info Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        MyServices::deleteMyServiceIndo($id);
        return back()->with('message', 'My Service Info Status Deleted Successfully');
    }
}
