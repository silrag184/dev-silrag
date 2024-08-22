<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeamInfo extends Model
{
    use HasFactory;

    private static $team, $image, $imageUrl, $directory, $imageName, $extension;


    public static function getImageUrl($request){
        self::$image            = $request->file('image');
        self::$extension        = self::$image->getClientOriginalExtension();
        self::$imageName        = rand(10000, 500000).'.'.self::$extension;
        self::$directory        = 'upload/team-member-images/';
        self::$image->move(self::$directory, self::$imageName);
        self::$imageUrl         = self::$directory.self::$imageName;
    }

    public static function saveTeamInfo($request){

        if ($request->file('image')){
            self::getImageUrl($request);
        }
        else{
            self::$imageUrl = ' ';
        }

        self::$team                 = new TeamInfo();
        self::$team->t_name         = $request->t_name;
        self::$team->designation    = $request->designation;
        self::$team->t_fburl        = $request->t_fburl;
        self::$team->t_github       = $request->t_github;
        self::$team->t_linked       = $request->t_linked;
        self::$team->image          = self::$imageUrl;
        self::$team->web_url        = $request->web_url;
        self::$team->save();
    }

    public static function updateTeamInfo($request, $id){

        self::$team = TeamInfo::find($id);
        if ($request->file('image')){
            if (file_exists(self::$team->image)){
                unlink(self::$team->image);
            }
            self::getImageUrl($request);
        }
        else{
            self::$imageUrl = self::$team->image;
        }

        self::$team->t_name         = $request->t_name;
        self::$team->designation    = $request->designation;
        self::$team->t_fburl        = $request->t_fburl;
        self::$team->t_github       = $request->t_github;
        self::$team->t_linked       = $request->t_linked;
        self::$team->image          = self::$imageUrl;
        self::$team->web_url        = $request->web_url;
        self::$team->save();
    }

    public static function infoStatus($id){
        self::$team =TeamInfo::find($id);
        if (self::$team->status == 1){
            self::$team->status = 0;
        }
        else{
            self::$team->status = 1;
        }
        self::$team->save();
    }

    public static function deleteTeamInfo($id){
        self::$team = TeamInfo::find($id);
        if (file_exists(self::$team->image)){
            unlink(self::$team->image);
        }
        self::$team->delete();
    }
}
