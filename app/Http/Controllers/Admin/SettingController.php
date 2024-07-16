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

        $record = Model::first();
        $keys = ['desc', 'fb', 'insta', 'email', 'phone', 'viber', 'whatsapp', 'disc'];
        foreach ($keys as $key) {
            $upd[$key] = $request->$key;
        }

        if($request->hasFile('logo')) {
            $file = $request->logo;
            $filename = mt_rand() . '.'.$file->clientExtension();
            $file->move('uploads/Logos', $filename );
            $upd['logo'] = $filename;
        }
        $record->update($upd);

        return response(['msg' => "Saved $this->ent"]);
    }
}
