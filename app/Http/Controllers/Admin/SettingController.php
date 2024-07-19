<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Setting as Model;

class SettingController extends Controller
{
    public $ent = 'Settings';

    public function index() {
        return view('Admin.Settings');
    }

    public function edit() {
        $record = Model::first();

        $data = [
            'record' => $record,
        ];

        return response()->json($data);
    }

    public function upd(Request $request) {
        $request->validate([
            'desc' => 'required',
            'fb' => 'required|url',
            'insta' => 'required|url',
            'email' => 'required|email',
            'phone' => 'required',
            'viber' => 'required',
            'whatsapp' => 'required',
            'disc' => 'required',
        ]);

        $count = Model::all()->count();
        $count == 0 ? $record = new Model() : $record = Model::first();
        
        $keys = ['logo', 'desc', 'fb', 'insta', 'email', 'phone', 'viber', 'whatsapp', 'disc'];
        foreach ($keys as $key) {
            if ($key == "logo") {
                if($file = $request->file($key)) {
                    $filename = mt_rand() . '.'.$file->clientExtension();
                    $file->move('uploads/Logos', $filename );

                    if ($count > 0) {
                        $path = public_path("uploads/Logos/".$record->logo);
                        file_exists($path) ? unlink($path) : false;
                        $upd[$key] = $filename;
                    }
                    else {
                        $record->$key = $filename;
                    }
                }
            }
            else {
                $count == 0 ? $record->$key = $request->$key : $upd[$key] = $request->$key;
            }
        }

        $count == 0 ? $record->save() : $record->update($upd);
        
        return response(['msg' => "Saved $this->ent"]);
    }
}
