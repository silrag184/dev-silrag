<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MyServices extends Model
{
    use HasFactory;

    private static $myService;

    public static function saveMyServiceInfo($request){

        self::$myService = new MyServices();
        self::$myService->service_title = $request->service_title;
        self::$myService->icon_name = $request->icon_name;
        self::$myService->description = $request->description;
        self::$myService->save();
    }

    public static function updateMyServiceInfo($request, $id){

        self::$myService = MyServices::find($id);
        self::$myService->service_title = $request->service_title;
        self::$myService->icon_name = $request->icon_name;
        self::$myService->description = $request->description;
        self::$myService->save();
    }

    public static function myServiceStatus($id){
        self::$myService = MyServices::find($id);
        if (self::$myService->status == 1){
            self::$myService->status = 0;
        }
        else{
            self::$myService->status = 1;
        }
        self::$myService->save();
    }

    public static function deleteMyServiceIndo($id){
        self::$myService = MyServices::find($id);
        self::$myService->delete();
    }
}
