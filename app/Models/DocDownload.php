<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use function Livewire\find;

class DocDownload extends Model
{
    use HasFactory;

    private static $docDownload, $file, $fileName, $extension, $directory, $fileUrl, $filePath;

    private static function getDocUrl($request){
        self::$file = $request->file('file');
        self::$extension = self::$file->getClientOriginalExtension();
        self::$fileName = rand(10000, 500000).'.'.self::$extension;
        self::$directory = 'upload/my-doc/';
        self::$file->move(self::$directory, self::$fileName);
        self::$fileUrl = self::$directory.self::$fileName;
        return self::$fileUrl;
    }


    public static function saveDocument($request){

        if ($request->file('file'))
        {
            self::$fileUrl = self::getDocUrl($request);
        }
        else{
            self::$fileUrl = ' ';
        }
        self::$docDownload = new DocDownload();
        self::$docDownload->file = self::$fileUrl;
        self::$docDownload->save();
    }

    public static function updateDocument($request, $id){

        self::$docDownload = DocDownload::find($id);

        if ($request->file('file')){
            if (file_exists(self::$docDownload->file)){
                unlink(self::$docDownload->file);
            }
            self::getDocUrl($request);
        }
        else{
            self::$fileUrl = self::$docDownload->file;
        }

        self::$docDownload->file = self::$fileUrl;
        self::$docDownload->save();
    }

    public static function docStatus($id){
        self::$docDownload = DocDownload::find($id);
        if (self::$docDownload->status == 1){
            self::$docDownload->status = 0;
        }
        else{
            self::$docDownload->status = 1;
        }
        self::$docDownload->save();
    }

    public static function deleteDocument($id){
        self::$docDownload = DocDownload::find($id);
        if (file_exists(self::$docDownload->file)){
            unlink(self::$docDownload->file);
        }
        if (file_exists(self::$docDownload->file)){
            unlink(self::$docDownload->file);
        }
        self::$docDownload->delete();
    }


}
