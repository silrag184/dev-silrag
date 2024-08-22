<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\DocDownload;
use Illuminate\Http\Request;

class CvDownloadController extends Controller
{

    public function documentDownload(){
        $file = public_path('upload/my-doc/124753.pdf');
        return response()->download($file);
    }

}
