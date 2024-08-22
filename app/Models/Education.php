<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    use HasFactory;

    private static $education;

    public static function saveEducation($request){

        self::$education                = new Education();
        self::$education->course        = $request->course;
        self::$education->department    = $request->department;
        self::$education->institute     = $request->institute;
        self::$education->duration      = $request->duration;
        self::$education->result        = $request->result;
        self::$education->save();

    }

    public static function updateEducation($request, $id){

        self::$education = Education::find($id);
        self::$education->course        = $request->course;
        self::$education->department    = $request->department;
        self::$education->institute     = $request->institute;
        self::$education->duration      = $request->duration;
        self::$education->result        = $request->result;
        self::$education->save();
    }

    public static function removeEducation($id){
        self::$education = Education::find($id);
        self::$education->delete();
    }
}
