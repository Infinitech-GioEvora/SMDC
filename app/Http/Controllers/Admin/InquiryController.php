<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Inquiry as Model;

class InquiryController extends Controller
{
    public $ent = 'Inquiry';

    public function index() {
        return view('Admin.Inquiries');
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
            'phone' => 'required',
            'email' => 'required|email',
            'msg' => 'required',
        ]);

        $record = new Model();
        $keys = ['name', 'phone', 'email', 'msg'];
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
            'msg' => 'required',
        ]);

        $record = Model::find($request->id);
        $keys = ['name','phone', 'email', 'msg'];
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
