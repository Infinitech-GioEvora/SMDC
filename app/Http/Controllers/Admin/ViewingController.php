<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;

use App\Models\Viewing as Model;
use App\Models\Property as Related;

use App\Jobs\SendUserViewingMail;

use Mail;
use App\Mail\UserViewingMail;

class ViewingController extends Controller
{
    public $ent = 'Viewing';

    public function index() {
        return view('Admin.Viewings');
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

        $record = Model::with('property')->where("id", $id)->first();

        $mail_data = [
            "email" => $record->email,
            "name" => $record->name,
            "property" => $record->property->name,
            "date" => Carbon::parse($record->date)->toFormattedDateString(),
            "time" => Carbon::createFromFormat('H:i:s', $record->time)->format('g:i a'),
            "status" => $record->status,
        ];

        // SendUserViewingMail::dispatch($mail_data);
        Mail::to($mail_data['email'])->send(new UserViewingMail($mail_data));
        return response(['msg'=> "$this->ent $status"]);
    }
}
