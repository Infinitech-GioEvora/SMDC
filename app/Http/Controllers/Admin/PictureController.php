<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Picture as Model;
use App\Models\Property as Related;

class PictureController extends Controller
{
    public $ent = 'Picture';

    public function index() {
        return view('Admin.Pictures');
    }

    public function all(Request $request) {
        $records = Related::find($request->fk)->pictures;

        $data = [
            'records' => $records,
        ];

        return response()->json($data);
    }

    public function add(Request $request) {
        $request->validate([
            'img' => 'required|image',
            'property_id' => 'required',
        ]);

        $record = new Model();

        $keys = ['img', 'property_id'];
        foreach ($keys as $key) {
            if ($key == "img") {
                if($request->hasFile($key)) {
                    $file = $request->$key;
                    $filename = mt_rand() . '.'.$file->clientExtension();
                    $file->move('uploads/Properties/Pictures', $filename );
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

        $keys = ['img'];
        foreach ($keys as $key) {
            if ($key == "img") {
                if($file = $request->file($key)) {
                    $filename = mt_rand() . '.'.$file->clientExtension();
                    $file->move('uploads/Properties/Pictures', $filename );

                    $path = public_path("uploads/Properties/Pictures/".$record->img);
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
        $path = public_path("uploads/Properties/Pictures/".$record->img);
        file_exists($path) ? unlink($path) : false;
        $record->delete();

        return response(['msg' => "Deleted $this->ent"]);
    }
}
