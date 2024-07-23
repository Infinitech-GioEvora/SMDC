<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Registration as Model;
use App\Models\Property as Related;

use App\Jobs\SendRegistrationMail;

class RegistrationController extends Controller
{
    public $ent = 'Registration';

    public function index() {
        return view('Admin.Registrations');
    }

    public function all() {
        $records = Model::with('property')->orderBy('status', 'DESC')->get();

        $data = [
            'records' => $records,
        ];

        return response()->json($data);
    }

    public function add(Request $request) {
        $request->validate([
            'name' => 'required',
            'img' => 'required|image',
            'phone' => 'required',
            'email' => 'required|email',
            'msg' => 'required',
            'status' => 'required',
            'property_id' => 'required',
        ]);

        $record = new Model();
        $keys = ['name', 'img', 'phone', 'email', 'msg', 'status', 'property_id'];
        foreach ($keys as $key) {
            if ($key == "img") {
                if($request->hasFile($key)) {
                    $file = $request->$key;
                    $filename = mt_rand() . '.'.$file->clientExtension();
                    $file->move('uploads/IDs', $filename );
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
            'phone' => 'required',
            'email' => 'required|email',
            'msg' => 'required',
            'status' => 'required',
            'property_id' => 'required',
        ]);

        $record = Model::find($request->id);
        $keys = ['name', 'img', 'phone', 'email', 'msg', 'status', 'property_id'];
        foreach ($keys as $key) {
            if ($key == "img") {
                if($file = $request->file($key)) {
                    $filename = mt_rand() . '.'.$file->clientExtension();
                    $file->move('uploads/IDs', $filename );

                    $path = public_path("uploads/IDs/".$record->img);
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
        $path = public_path("uploads/IDs/".$record->img);
        file_exists($path) ? unlink($path) : false;
        $record->delete();

        return response(['msg' => "Deleted $this->ent"]);
    }

    public function get_related() {
        $records = Related::where("status", "Unpublished")->get();

        $data = [
            'records' => $records,
        ];

        return response($data);
    }

    public function change_status($id, $status) {
        $record = Model::find($id);
        $related = Related::find($record->property_id);

        if ($status == "Accept") {
            $status .= "ed";
            $related->update(['status' => "Published"]);
        }
        else {
            $status .= "d";
        }
        $record->update(['status' => $status]);

        $mail_data = [
            "email" => $record->email,
            "name" => $record->name,
            "property" => $related->name,
            "status" => $record->status,
        ];
        SendRegistrationMail::dispatch($mail_data);

        return response(['msg'=> "$this->ent $status"]);
    }
}
