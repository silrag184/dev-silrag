<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use function Livewire\find;

class BlogCategory extends Model
{
    use HasFactory;

    private static $blogCategory;

    public static function newBlogCategory($request){

        self::$blogCategory                = new BlogCategory();
        self::$blogCategory->name          = $request->name;
        self::$blogCategory->blog_cat_desc = $request->blog_cat_desc;
        self::$blogCategory->save();

    }

    public static function updateBlogCategory($request, $id){

        self::$blogCategory                = BlogCategory::find($id);
        self::$blogCategory->name          = $request->name;
        self::$blogCategory->blog_cat_desc = $request->blog_cat_desc;
        self::$blogCategory->save();
    }

    public static function blogCategoryStatus($id){

        self::$blogCategory = BlogCategory::find($id);
        if (self::$blogCategory->status == 1){
            self::$blogCategory->status = 0;
        }else{
            self::$blogCategory->status = 1;
        }
        self::$blogCategory->save();

    }

    public static function deleteBlogCategory($id){
        self::$blogCategory = BlogCategory::find($id);
        self::$blogCategory->delete();
    }
}
