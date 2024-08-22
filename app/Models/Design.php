<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Design extends Model
{
    use HasFactory;

    private static $design;

    public static function saveDesignSkillInfo($request){

        self::$design           = new Design();
        self::$design->name     = $request->name;
        self::$design->number   = $request->number;
        self::$design->value    = $request->value;
        self::$design->save();

    }

    public static function updateDesignSkillInfo($request, $id){

        self::$design           = Design::find($id);
        self::$design->name     = $request->name;
        self::$design->number   = $request->number;
        self::$design->value    = $request->value;
        self::$design->save();
    }

    public static function skillStatus($id){
        self::$design =Design::find($id);
        if (self::$design->status == 1){
            self::$design->status = 0;
        }
        else{
            self::$design->status = 1;
        }
        self::$design->save();
    }

    public static function deleteDesignSkillInfo($id){
        self::$design = Design::find($id);
        self::$design->delete();
    }
}
