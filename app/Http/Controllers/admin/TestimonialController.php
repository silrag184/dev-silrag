<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Profile;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.testimonial.index',[
            'profiles' => Profile::first(),
            'testimonials' => Testimonial::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.testimonial.add',[
            'profiles' => Profile::first(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Testimonial::saveTestimonial($request);
        return redirect('/testimonial')->with('message','Testimonial Added Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        Testimonial::testimonialStatus($id);
        return back()->with('message','Status Updated Successfully');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('admin.testimonial.edit',[
            'profiles' => Profile::first(),
            'testimonial' => Testimonial::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Testimonial::updateTestimonial($request, $id);
        return redirect('/testimonial')->with('message','Testimonial Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Testimonial::deleteTestimonial($id);
        return back()->with('message','Status Deleted Successfully');
    }
}
