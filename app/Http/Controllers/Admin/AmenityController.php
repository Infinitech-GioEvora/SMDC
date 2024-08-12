<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Amenity as Model;
use App\Models\Property as Related;

class AmenityController extends Controller
{
    public $ent = 'Amenity';

    public function index() {
        return view('Admin.Amenities');
    }

    public function all(Request $request) {
        $records = Related::find($request->fk)->amenities;

        $data = [
            'records' => $records,
        ];

        return response()->json($data);
    }

    public function add(Request $request) {
        $request->validate([
            'names' => 'required',
            'property_id' => 'required',
        ]);

        $names = explode("\r\n", $request->names);
        foreach ($names as $name) {
            $record = new Model();
            $record->name = $name;
            $record->property_id = $request->property_id;
            $record->save();  
        }

        return response(['msg' => "Added Amenities"]);
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
        ]);

        $record = Model::find($request->id);

        $keys = ['name'];
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
}
