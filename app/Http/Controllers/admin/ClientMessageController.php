<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Profile;
use App\Models\Website;
use Illuminate\Http\Request;

class ClientMessageController extends Controller
{

    public static $client;
    public function clientMessage(Request $request){
        return view('admin.client-message.index',[
            'clients' => Website::all(),
            'profiles' => Profile::first(),
        ]);
    }

    public function seeMessageInDetails($id){
        return view('admin.client-message.see-message',[
            'client' => Website::find($id),
            'profiles' => Profile::first(),
        ]);
    }

    public function deleteClientMessage($id){
        self::$client = Website::find($id);
        self::$client->delete();
        return back();
    }
}
