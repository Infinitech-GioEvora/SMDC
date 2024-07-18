<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Viewing as Model;
use App\Models\Property as Related;

class ViewingController extends Controller
{
    public $ent = 'Viewing';

    public function index() {
        return view('Admin.Viewings');
    }

    public function all() {
        $records = Model::orderBy('status', 'DESC')->with('property')->get();    

        $data = [
            'records' => $records,
        ];

        return response()->json($data);
    }

    public function add(Request $request) {
        $request->validate([
            'name' => 'required', 
            'phone' => 'required',
            'email' => 'required|email',
            'date' => 'required',
            'time'=> 'required',
            'msg' => 'required',
            'status' => 'required',
            'property_id' => 'required',
        ]);

        $record = new Model();
        $keys = ['name', 'phone', 'email', 'date', 'time', 'msg', 'status', 'property_id'];
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
            'name' => 'required', 
            'phone' => 'required',
            'email' => 'required|email',
            'date' => 'required',
            'time'=> 'required',
            'msg' => 'required',
            'status' => 'required',
            'property_id' => 'required',
        ]);

        $record = Model::find($request->id);
        $keys = ['name', 'phone', 'email', 'date', 'time', 'msg', 'status', 'property_id'];
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

    public function get_related() {
        $records = Related::all();

        $data = [
            'records' => $records,
        ];

        return response($data);
    }

    public function change_status($id, $status) {
        $record = Model::find($id);
        $status == "Accept" ? $status .= "ed" : $status .= "d";
        $record->update(['status' => $status]);

        return response(['msg'=> "$this->ent $status"]);
    }
}
