<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Award as Model;

class AwardController extends Controller
{
    public $ent = 'Award';

    public function index() {
        return view('Admin.Awards');
    }

    public function all() {
        $records = Model::all();

        $data = [
            'records' => $records,
        ];

        return response()->json($data);
    }

    public function add(Request $request) {
        $request->validate([
            'name' => 'required', 
            'img' => 'required|image',
            'type' => 'required',
        ]);

        $record = new Model();

        $keys = ['name', 'img', 'type'];
        foreach ($keys as $key) {
            if ($key == "img") {
                if($request->hasFile($key)) {
                    $file = $request->$key;
                    $filename = mt_rand() . '.'.$file->clientExtension();
                    $file->move('uploads/Awards', $filename );
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
        $request->validate([
            'name' => 'required', 
            'type' => 'required'
        ]);

        $record = Model::find($request->id);
        $keys = ['name', 'img', 'type'];
        foreach ($keys as $key) {
            if ($key == "img") {
                if($file = $request->file($key)) {
                    $filename = mt_rand() . '.'.$file->clientExtension();
                    $file->move('uploads/Awards', $filename );

                    $path = public_path("uploads/Awards/".$record->img);
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
        $path = public_path("uploads/Awards/".$record->img);
        file_exists($path) ? unlink($path) : false;
        $record->delete();

        return response(['msg' => "Deleted $this->ent"]);
    }
}
