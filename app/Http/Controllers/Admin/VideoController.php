<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Video as Model;
use App\Models\Property as Related;

class VideoController extends Controller
{
    public $ent = 'Video';

    public function index() {
        return view('Admin.Videos');
    }

    public function all(Request $request) {
        $records = Related::find($request->fk)->videos;

        $data = [
            'records' => $records,
        ];

        return response()->json($data);
    }

    public function add(Request $request) {
        $request->validate([
            'vid' => 'required',
            'property_id' => 'required',
        ]);

        $record = new Model();

        $keys = ['vid', 'property_id'];
        foreach ($keys as $key) {
            if ($key == "vid") {
                if($request->hasFile($key)) {
                    $file = $request->$key;
                    $filename = mt_rand() . '.'.$file->clientExtension();
                    $file->move('uploads/Properties/Videos', $filename );
                    $record->$key = $filename;
                }
            }
            else {
                $record->$key = $request->$key;
            }
        }

        $record->save();

        return response(['msg' => "Added $this->ent"]);
    }

    public function edit($id) {
        $record = Model::find($id);

        $data = [
            'record' => $record,
        ];

        return response($data);
    }

    public function upd(Request $request) {
        $record = Model::find($request->id);

        $keys = ['vid'];
        foreach ($keys as $key) {
            if ($key == "vid") {
                if($file = $request->file($key)) {
                    $filename = mt_rand() . '.'.$file->clientExtension();
                    $file->move('uploads/Properties/Videos', $filename );

                    $path = public_path("uploads/Properties/Videos/".$record->vid);
                    file_exists($path) ? unlink($path) : false;

                    $upd[$key] = $filename;
                }
            }
            else {
                $upd[$key] = $request->$key;
            }
        }

        $record->update($upd);

        return response(['msg' => "Updated $this->ent"]);
    }

    public function del($id) {
        $record = Model::find($id);
        $path = public_path("uploads/Properties/Videos/".$record->vid);
        file_exists($path) ? unlink($path) : false;
        $record->delete();

        return response(['msg' => "Deleted $this->ent"]);
    }
}
