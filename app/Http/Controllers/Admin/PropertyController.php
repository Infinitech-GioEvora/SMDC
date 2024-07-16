<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Property as Model;

class PropertyController extends Controller
{
    public $ent = 'Property';

    public function index() {
        return view('Admin.Properties');
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
            'name'=> 'required',
            'cat'=> 'required',
            'type'=> 'required',
            'price'=> 'required',
            'locat'=> 'required',
            'map'=> 'required',
            'lice'=> 'required',
            'desc'=> 'required',
        ]);

        $record = new Model();
        $keys = ['name', 'cat', 'type', 'price', 'locat', 'map', 'lice', 'desc'];
        foreach ($keys as $key) {
            $record->$key = $request->$key;
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
            'name'=> 'required',
            'cat'=> 'required',
            'type'=> 'required',
            'price'=> 'required',
            'locat'=> 'required',
            'map'=> 'required',
            'lice'=> 'required',
            'desc'=> 'required',
        ]);

        $record = Model::find($request->id);
        $keys = ['name', 'cat', 'type', 'price', 'locat', 'map', 'lice', 'desc'];
        foreach ($keys as $key) {
            $upd[$key] = $request->$key;
        }

        $record->update($upd);

        return response(['msg' => "Updated $this->ent"]);
    }

    public function del($id) {
        $record = Model::find($id)->delete();
        return response(['msg' => "Deleted $this->ent"]);
    }

    public function set(Request $request, $id) {
        $request->session()->put('property_id', $id);
    }
}
