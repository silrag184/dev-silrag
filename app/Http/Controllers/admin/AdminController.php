<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Profile;

class AdminController extends Controller
{
    public function index(){
        return view('admin.dashboard.index',[
            'profiles' => Profile::first(),
        ]);
    }
}
