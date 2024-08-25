<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    use HasFactory;

    private static $testimonial, $image, $extension, $directory, $imageName, $imageUrl;


    public static function getImageUrl($request){
        self::$image            = $request->file('image');
        self::$extension        = self::$image->getClientOriginalExtension();
        self::$imageName        = rand(10000, 500000).'.'.self::$extension;
        self::$directory        = 'upload/testimonial-images/';
        self::$image->move(self::$directory, self::$imageName);
        self::$imageUrl         = self::$directory.self::$imageName;
    }
    public static function saveTestimonial($request){
        if ($request->file('image')){
            self::getImageUrl($request);
        }
        else{
            self::$imageUrl = ' ';
        }
        self::$testimonial = new Testimonial();
        self::$testimonial->project_title = $request->project_title;
        self::$testimonial->work_platform = $request->work_platform;
        self::$testimonial->work_category = $request->work_category;
        self::$testimonial->message = $request->message;
        self::$testimonial->client_name = $request->client_name;
        self::$testimonial->client_designation = $request->client_designation;
        self::$testimonial->starting_date = $request->starting_date;
        self::$testimonial->ending_date = $request->ending_date;
        self::$testimonial->image = self::$imageUrl;
        self::$testimonial->save();
    }

    public static function updateTestimonial($request, $id){
        self::$testimonial = Testimonial::find($id);
        if ($request->file('image')){
            if (file_exists(self::$testimonial->image)){
                unlink(self::$testimonial->image);
            }
            self::getImageUrl($request);
        }
        else{
            self::$imageUrl = self::$testimonial->image;
        }
        self::$testimonial->project_title = $request->project_title;
        self::$testimonial->work_platform = $request->work_platform;
        self::$testimonial->work_category = $request->work_category;
        self::$testimonial->message = $request->message;
        self::$testimonial->client_name = $request->client_name;
        self::$testimonial->client_designation = $request->client_designation;
        self::$testimonial->starting_date = $request->starting_date;
        self::$testimonial->ending_date = $request->ending_date;
        self::$testimonial->image = self::$imageUrl;
        self::$testimonial->save();
    }

    public static function testimonialStatus($id){
        self::$testimonial = Testimonial::find($id);
        if (self::$testimonial->status == 1){
            self::$testimonial->status = 0;
        }
        else{
            self::$testimonial->status = 1;
        }
        self::$testimonial->save();
    }

    public static function deleteTestimonial($id){
        self::$testimonial = Testimonial::find($id);
        if (file_exists(self::$testimonial->image)){
            unlink(self::$testimonial->image);
        }
        if (file_exists(self::$testimonial->picture)){
            unlink(self::$testimonial->picture);
        }
        self::$testimonial->delete();
    }
}
