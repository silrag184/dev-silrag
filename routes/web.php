<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\website\WebsiteController;
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\BlogCategoryController;
use App\Http\Controllers\admin\BlogController;
use App\Http\Controllers\admin\ProfileController;
use App\Http\Controllers\admin\ClientMessageController;
use App\Http\Controllers\admin\EducationController;
use App\Http\Controllers\admin\DesignController;
use App\Http\Controllers\admin\DevelopmentSkillController;
use App\Http\Controllers\admin\ExperienceController;
use App\Http\Controllers\admin\TeamInfoController;
use App\Http\Controllers\admin\MyProjectsController;
use App\Http\Controllers\admin\MyServicesController;
use App\Http\Controllers\admin\DocDownloadCOntroller;
use App\Http\Controllers\admin\CvDownloadController;


//frontend routes start
Route::get('/',[WebsiteController::class,'index'])->name('home');
Route::get('/all/blog',[WebsiteController::class,'blog'])->name('all.blogs');
Route::get('/all/projects',[WebsiteController::class,'projects'])->name('all.projects');
Route::post('/client-contact',[WebsiteController::class,'clientContact'])->name('client.contact');

//Route for download document
Route::get('/document/download',[CvDownloadController::class,'documentDownload'])->name('document.download');

//frontend routes end

//backend routes start
Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified',])->group(function () {


    Route::get('/dashboard',[AdminController::class,'index'])->name('dashboard');
    Route::resources(['category' => CategoryController::class]);
    Route::resources(['blog-category' => BlogCategoryController::class]);
    Route::resources(['blog' => BlogController::class]);
    Route::resources(['profile' => ProfileController::class]);
    Route::get('/client-message',[ClientMessageController::class,'clientMessage'])->name('client.message');
    Route::get('/see-message/details{id}',[ClientMessageController::class,'seeMessageInDetails'])->name('message.details');
    Route::get('/delete/client-message{id}',[ClientMessageController::class,'deleteClientMessage'])->name('delete.message');

    //Routes for Resume start
    Route::resources(['education'=>EducationController::class]);
    Route::resources(['design' => DesignController::class]);
    Route::resources(['development' => DevelopmentSkillController::class]);
    Route::resources(['experience' => ExperienceController::class]);
    //Routes for Resume End

    Route::resources(['team' => TeamInfoController::class]);

    //Routes for project start
    Route::resources(['myProject' => MyProjectsController::class]);

    //Routes for services
    Route::resources(['myService' => MyServicesController::class]);

    //Route for Download CV
    Route::resources(['docDownload' => DocDownloadController::class]);

});
//backend routes end
