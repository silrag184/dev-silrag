<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\Category;
use App\Models\Design;
use App\Models\Development;
use App\Models\DocDownload;
use App\Models\Education;
use App\Models\Experience;
use App\Models\MyProjects;
use App\Models\MyServices;
use App\Models\Profile;
use App\Models\TeamInfo;
use App\Models\Testimonial;
use App\Models\Website;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function index(){
        return view('website.home.index',[
            'blogs'=>Blog::where('status', 1)->latest()->take(3)->get(),
            'blogCategory'=>BlogCategory::all(),
            'profiles' => Profile::first(),
            'educations' => Education::all(),
            'designs' => Design::all(),
            'developments' => Development::all(),
            'experiences' => Experience::where('status', 1)->latest()->take(3)->get(),
            'teams' => TeamInfo::all(),
            'myProjects' => MyProjects::where('status', 1)->latest()->take(3)->get(),
            'myServices' => MyServices::where('status', 1)->latest()->take(3)->get(),
            'docDownload' => DocDownload::where('status',1)->first(),
            'testimonials' => Testimonial::where('status',1)->latest()->take(5)->get()

        ]);
    }

    public function clientContact(Request $request){
        Website::clientMessage($request);
        return back();
    }

    public function blog(){
        return view('website.all-blogs.index',[
            'blogs' => Blog::all(),
            'profiles' => Profile::first(),
            'blogCategory'=>BlogCategory::all(),
        ]);
    }

    public function projects(){
        return view('website.all-projects.index',[
            'myProjects' => MyProjects::all(),
            'profiles' => Profile::first(),
            'categories' => Category::all()
        ]);
    }
}
