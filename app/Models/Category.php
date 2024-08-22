<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    private static $category, $image, $imageUrl, $directory, $imageName, $extension;

    public static function getImageUrl($request){
        self::$image            = $request->file('image');
        self::$extension        = self::$image->getClientOriginalExtension();
        self::$imageName        = rand(10000, 500000).'.'.self::$extension;
        self::$directory        = 'upload/category-images/';
        self::$image->move(self::$directory, self::$imageName);
        self::$imageUrl         = self::$directory.self::$imageName;
    }

    public static function newCategory($request){
        if ($request->file('image')){
            self::getImageUrl($request);
        }
        else{
            self::$imageUrl = ' ';
        }
        self::$category                 = new Category();
        self::$category->name           = $request->name;
        self::$category->description    = $request->description;
        self::$category->image          = self::$imageUrl;
        self::$category->save();
    }

    public static function updateCategory($request, $id){
        self::$category = Category::find($id);

        if ($request->file('image')){
            if (file_exists(self::$category->image)){
                unlink(self::$category->image);
            }
            self::getImageUrl($request);
        }
        else{
            self::$imageUrl = self::$category->image;
        }
        self::$category->name           = $request->name;
        self::$category->description    = $request->description;
        self::$category->image          = self::$imageUrl;
        self::$category->save();
    }

    public static function deleteCategory($id){
        self::$category = Category::find($id);
        if (file_exists(self::$category->image)){
            unlink(self::$category->image);
        }
        self::$category->delete();
    }

    public static function checkStatus($id){
        self::$category =Category::find($id);
        if (self::$category->status == 1){
            self::$category->status = 0;
        }
        else{
            self::$category->status = 1;
        }
        self::$category->save();
    }
}
