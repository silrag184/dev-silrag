<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    private static $profile;

    public static function saveProfile($request){

        self::$profile                      = new Profile();
        self::$profile->m_name              = $request->m_name;
        self::$profile->designation         = $request->designation;
        self::$profile->f_designation       = $request->f_designation;
        self::$profile->s_designation       = $request->s_designation;
        self::$profile->s_description       = $request->s_description;
        self::$profile->m_description       = $request->m_description;
        self::$profile->note                = $request->note;
        self::$profile->main_logo           = getImageUrl($request->main_logo,'upload/profile-images/');
        self::$profile->sec_logo            = getImageUrl($request->sec_logo,'upload/profile-images/');
        self::$profile->pic_logo            = getImageUrl($request->pic_logo,'upload/profile-images/');
        self::$profile->logo_icon           = getImageUrl($request->logo_icon,'upload/profile-images/');
        self::$profile->logo_icon1          = getImageUrl($request->logo_icon1,'upload/profile-images/');
        self::$profile->logo_icon2          = getImageUrl($request->logo_icon2,'upload/profile-images/');
        self::$profile->fb_url              = $request->fb_url;
        self::$profile->linked_in_url       = $request->linked_in_url;
        self::$profile->git_url             = $request->git_url;
        self::$profile->phone               = $request->phone;
        self::$profile->email               = $request->email;
        self::$profile->copy_right          = $request->copy_right;
        self::$profile->save();
    }

    public static function updateProfile($request, $id){
        self::$profile = Profile::find($id);

        if ($request->main_logo)
        {
            if (file_exists(self::$profile->main_logo))
            {
                unlink(self::$profile->main_logo);
            }
            $mainLogoUrl = getImageUrl($request->main_logo, 'upload/profile-images/');
        }
        else
        {
            $mainLogoUrl = self::$profile->main_logo;
        }

        if ($request->sec_logo)
        {
            if (file_exists(self::$profile->sec_logo))
            {
                unlink(self::$profile->sec_logo);
            }
            $secLogoUrl = getImageUrl($request->sec_logo, 'upload/profile-images/');
        }
        else
        {
            $secLogoUrl = self::$profile->sec_logo;
        }

        if ($request->pic_logo)
        {
            if (file_exists(self::$profile->pic_logo))
            {
                unlink(self::$profile->pic_logo);
            }
            $picLogoUrl = getImageUrl($request->pic_logo, 'upload/profile-images/');
        }
        else
        {
            $picLogoUrl = self::$profile->pic_logo;
        }

        if ($request->logo_icon)
        {
            if (file_exists(self::$profile->logo_icon))
            {
                unlink(self::$profile->logo_icon);
            }
            $logoIconUrl = getImageUrl($request->logo_icon, 'upload/profile-images/');
        }
        else
        {
            $logoIconUrl = self::$profile->logo_icon;
        }

        if ($request->logo_icon1)
        {
            if (file_exists(self::$profile->logo_icon1))
            {
                unlink(self::$profile->logo_icon1);
            }
            $logoIconUrl1 = getImageUrl($request->logo_icon1, 'upload/profile-images/');
        }
        else
        {
            $logoIconUrl1 = self::$profile->logo_icon1;
        }

        if ($request->logo_icon2)
        {
            if (file_exists(self::$profile->logo_icon2))
            {
                unlink(self::$profile->logo_icon2);
            }
            $logoIconUrl2 = getImageUrl($request->logo_icon2, 'upload/profile-images/');
        }
        else
        {
            $logoIconUrl2 = self::$profile->logo_icon2;
        }

        self::$profile->m_name              = $request->m_name;
        self::$profile->designation         = $request->designation;
        self::$profile->f_designation       = $request->f_designation;
        self::$profile->s_designation       = $request->s_designation;
        self::$profile->s_description       = $request->s_description;
        self::$profile->m_description       = $request->m_description;
        self::$profile->note                = $request->note;
        self::$profile->main_logo           = $mainLogoUrl;
        self::$profile->sec_logo            = $secLogoUrl;
        self::$profile->pic_logo            = $picLogoUrl;
        self::$profile->logo_icon           = $logoIconUrl;
        self::$profile->logo_icon1          = $logoIconUrl1;
        self::$profile->logo_icon2          = $logoIconUrl2;
        self::$profile->fb_url              = $request->fb_url;
        self::$profile->linked_in_url       = $request->linked_in_url;
        self::$profile->git_url             = $request->git_url;
        self::$profile->phone               = $request->phone;
        self::$profile->email               = $request->email;
        self::$profile->copy_right          = $request->copy_right;
        self::$profile->save();

    }
}
