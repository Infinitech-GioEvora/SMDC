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
        $keys = ['name', 'type'];
        foreach ($keys as $key) {
            $record->$key = $request->$key;
        }

        if($request->hasFile('img')) {
            $file = $request->img;
            $filename = mt_rand() . '.'.$file->clientExtension();
            $file->move('uploads/Awards', $filename );
            $record->img = $filename;
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
        $keys = ['name','type'];
        foreach ($keys as $key) {
            $upd[$key] = $request->$key;
        }

        if($request->hasFile('img')) {
            $file = $request->img;
            $filename = mt_rand() . '.'.$file->clientExtension();
            $file->move('uploads/Awards', $filename );
            $upd['img'] = $filename;
        }
        $record->update($upd);

        return response(['msg' => "Updated $this->ent"]);
    }

    public function del($id) {
        $record = Model::find($id)->delete();
        return response(['msg' => "Deleted $this->ent"]);
    }
}
