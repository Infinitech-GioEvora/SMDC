<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Property as Model;
use App\Models\Registration as Related;


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
            'name' => 'required',
            'cat' => 'required',
            'type' => 'required',
            'price' => 'required',
            'locat' => 'required',
            'map' => 'required',
            'lice' => 'required',
            'desc' => 'required',
            'status' => 'required',
        ]);

        $record = new Model();

        $keys = ['name', 'cat', 'type', 'price', 'locat', 'map', 'lice', 'desc', 'status'];
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
            'status' => 'required',
        ]);

        $record = Model::find($request->id);

        $keys = ['name', 'cat', 'type', 'price', 'locat', 'map', 'lice', 'desc', 'status'];
        foreach ($keys as $key) {
            $upd[$key] = $request->$key;
        }

        $record->update($upd);

        return response(['msg' => "Updated $this->ent"]);
    }

    public function del($id) {
        $record = Model::find($id);
        $related = Related::where("property_id", $id)->delete();
        $record->delete();

        return response(['msg' => "Deleted $this->ent"]);
    }

    public function change_status($id, $status) {
        $record = Model::find($id);
        $status .= "ed";
        $record->update(['status' => $status]);

        return response(['msg'=> "$this->ent $status"]);
    }
}
