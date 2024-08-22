<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use function Carbon\this;

class MyProjects extends Model
{
    use HasFactory;

    private static $myProject, $image, $imageUrl, $directory, $imageName, $extension, $images, $picUrl;

    private static function getImageUrl($request){
        self::$image = $request->file('image');
        self::$extension = self::$image->getClientOriginalExtension();
        self::$imageName = rand(10000, 500000).'.'.self::$extension;
        self::$directory = 'upload/project-image/';
        self::$image->move(self::$directory, self::$imageName);
        self::$imageUrl = self::$directory.self::$imageName;
        return self::$imageUrl;
    }

    private static function getPictureUrl($request){
        self::$image = $request->file('picture');
        self::$extension = self::$image->getClientOriginalExtension();
        self::$imageName = rand(10000, 500000).'.'.self::$extension;
        self::$directory = 'upload/project-images/';
        self::$image->move(self::$directory, self::$imageName);
        self::$picUrl = self::$directory.self::$imageName;
        return self::$picUrl;
    }

    public static function saveMyProject($request){

        if ($request->file('image'))
        {
            self::$imageUrl = self::getImageUrl($request);
        }
        else{
            self::$imageUrl = ' ';
        }
        if ($request->file('picture'))
        {
            self::$picUrl = self::getPictureUrl($request);
        }
        else{
            self::$picUrl = ' ';
        }

        self::$myProject = new MyProjects();
        self::$myProject->category_id = $request->category_id;
        self::$myProject->project_title = $request->project_title;
        self::$myProject->short_desc = $request->short_desc;
        self::$myProject->project_github = $request->project_github;
        self::$myProject->live_demo = $request->live_demo;
        self::$myProject->image = self::$imageUrl;
        self::$myProject->picture = self::$picUrl;
        self::$myProject->save();

    }

    public static function updateMyProject($request, $id){

        self::$myProject = MyProjects::find($id);

        if ($request->file('image')){
            if (file_exists(self::$myProject->image)){
                unlink(self::$myProject->image);
            }
            self::getImageUrl($request);
        }
        else{
            self::$imageUrl = self::$myProject->image;
        }

        if ($request->file('picture')){
            if (file_exists(self::$myProject->picture)){
                unlink(self::$myProject->picture);
            }
            self::getPictureUrl($request);
        }
        else{
            self::$picUrl = self::$myProject->picture;
        }

        self::$myProject->category_id = $request->category_id;
        self::$myProject->project_title = $request->project_title;
        self::$myProject->short_desc = $request->short_desc;
        self::$myProject->project_github = $request->project_github;
        self::$myProject->live_demo = $request->live_demo;
        self::$myProject->image = self::$imageUrl;
        self::$myProject->picture = self::$picUrl;
        self::$myProject->save();
    }

    public static function projectStatus($id){
        self::$myProject = MyProjects::find($id);
        if (self::$myProject->status == 1){
            self::$myProject->status = 0;
        }
        else{
            self::$myProject->status = 1;
        }
        self::$myProject->save();
    }

    public static function deleteProjectInfo($id){
        self::$myProject = MyProjects::find($id);
        if (file_exists(self::$myProject->image)){
            unlink(self::$myProject->image);
        }
        if (file_exists(self::$myProject->picture)){
            unlink(self::$myProject->picture);
        }
        self::$myProject->delete();
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }
}
