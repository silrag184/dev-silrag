<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Development extends Model
{
    use HasFactory;

    private static $development;

    public static function saveDevelopmentSkillInfo($request){

        self::$development          = new Development();
        self::$development->name    = $request->name;
        self::$development->number  = $request->number;
        self::$development->value   = $request->value;
        self::$development->save();

    }

    public static function updateDevelopmentSkillInfo($request, $id){

        self::$development          = Development::find($id);
        self::$development->name    = $request->name;
        self::$development->number  = $request->number;
        self::$development->value = $request->value;
        self::$development->save();
    }

    public static function skillStatus($id){
        self::$development =Development::find($id);
        if (self::$development->status == 1){
            self::$development->status = 0;
        }
        else{
            self::$development->status = 1;
        }
        self::$development->save();
    }

    public static function deleteDevelopmentSkillInfo($id){
        self::$development = Development::find($id);
        self::$development->delete();
    }
}
