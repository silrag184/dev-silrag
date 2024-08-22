<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    use HasFactory;

    private static $experience;

    public static function saveExperienceInfo($request){

        self::$experience                   = new Experience();
        self::$experience->title            = $request->title;
        self::$experience->subject          = $request->subject;
        self::$experience->institute        = $request->institute;
        self::$experience->duration         = $request->duration;
        self::$experience->description      = $request->description;
        self::$experience->save();

    }

    public static function updateExperienceInfo($request, $id){

        self::$experience                   = Experience::find($id);
        self::$experience->title            = $request->title;
        self::$experience->subject          = $request->subject;
        self::$experience->institute        = $request->institute;
        self::$experience->duration         = $request->duration;
        self::$experience->description      = $request->description;
        self::$experience->save();
    }

    public static function expeienceStatus($id){
        self::$experience =Experience::find($id);
        if (self::$experience->status == 1){
            self::$experience->status = 0;
        }
        else{
            self::$experience->status = 1;
        }
        self::$experience->save();
    }

    public static function deleteExperienceInfo($id){
        self::$experience = Experience::find($id);
        self::$experience->delete();
    }
}
