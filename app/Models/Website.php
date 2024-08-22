<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Website extends Model
{
    use HasFactory;

    public static $client;

    public static function clientMessage($request){

        self::$client               = new Website();
        self::$client->c_name       = $request->c_name;
        self::$client->c_number     = $request->c_number;
        self::$client->c_email      = $request->c_email;
        self::$client->subject      = $request->subject;
        self::$client->c_message    = $request->c_message;
        self::$client->save();
    }
}
