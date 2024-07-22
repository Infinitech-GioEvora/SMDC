<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Image as Model;
use App\Models\Property as Related;

class ImageController extends Controller
{
    public $ent = 'Image';

    public function index() {
        return view('Admin.Images');
    }

    public function all(Request $request) {
        $records = Related::find($request->fk)->images;

        $data = [
            'records' => $records,
        ];

        return response()->json($data);
    }

    public function add(Request $request) {
        $request->validate([
            'imgs' => 'required',
            'property_id' => 'required',
        ]);

        if($request->hasFile('imgs')) {
            foreach ($request->imgs as $file) {
                $filename = mt_rand() . '.'.$file->clientExtension();
                $file->move('uploads/Properties/Images', $filename );
    
                $record = new Model();
                $record->img = $filename;
                $record->property_id = $request->property_id;
                $record->save();   
            } 
        }

        return response(['msg' => "Added $this->ent"."s"]);
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
                    $file->move('uploads/Properties/Images', $filename );

                    $path = public_path("uploads/Properties/Images/".$record->img);
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
        $path = public_path("uploads/Properties/Images/".$record->img);
        file_exists($path) ? unlink($path) : false;
        $record->delete();

        return response(['msg' => "Deleted $this->ent"]);
    }
}
