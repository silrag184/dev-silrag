<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Blog extends Model
{
    use HasFactory;

    private static $blog, $slug, $image, $imageUrl, $directory, $imageName, $extension;

    public static function getImageUrl($request){
        self::$image        = $request->file('image');
        self::$extension    = self::$image->getClientOriginalExtension();
        self::$imageName    = rand(10000, 500000).'.'.self::$extension;
        self::$directory    = 'upload/blog-images/';
        self::$image->move(self::$directory, self::$imageName);
        self::$imageUrl     = self::$directory.self::$imageName;
    }

    public static function newBlog($request){
        if ($request->file('image')){
            self::getImageUrl($request);
        }
        else{
            self::$imageUrl = ' ';
        }

        self::$blog                     = new Blog();
        self::$blog->blogCategory_id    = $request->blogCategory_id;
        self::$blog->b_title            = $request->b_title;
        self::$blog->a_name             = $request->a_name;
        self::$blog->slug               = self::makeSlug($request);
        self::$blog->b_description      = $request->b_description;
        self::$blog->image              = self::$imageUrl;
        self::$blog->save();
    }


    public static function updateBlog($request, $id){

        self::$blog = Blog::find($id);

        if ($request->file('image')){
            if (file_exists(self::$blog->image)){
                unlink(self::$blog->image);
            }
            self::getImageUrl($request);
        }
        else{
            self::$imageUrl = self::$blog->image;
        }

        self::$blog->blogCategory_id    = $request->blogCategory_id;
        self::$blog->b_title            = $request->b_title;
        self::$blog->a_name             = $request->a_name;
        self::$blog->slug               = self::makeSlug($request);
        self::$blog->b_description      = $request->b_description;
        self::$blog->image              = self::$imageUrl;
        self::$blog->save();
    }

    private static function makeSlug($request){
        if ($request->slug){
            self::$slug = Str::slug($request->slug);
        }else{
            self::$slug = Str::slug($request->title);
        }
        return self::$slug;
    }

    public static function blogStatus($id){
        self::$blog =Blog::find($id);
        if (self::$blog->status == 1){
            self::$blog->status = 0;
        }
        else{
            self::$blog->status = 1;
        }
        self::$blog->save();
    }

    public function blogCategory(){
        return $this->belongsTo(BlogCategory::class);
    }

    public static function deleteBlog($id){
        self::$blog = Blog::find($id);
        if (file_exists(self::$blog->image)){
            unlink(self::$blog->image);
        }
        self::$blog->delete();
    }
}
