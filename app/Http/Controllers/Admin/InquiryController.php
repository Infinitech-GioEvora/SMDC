<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Inquiry as model;


class InquiryController extends Controller
{
    public function all() {
        $records = model::all();
        return response(['status' => 'success', 'records' => $records, 'code' => 200]);
    }

    public function create(Request $request) {
        $request->validate([
            'name' => 'required', 
            'phone' => 'required',
            'email'=> 'required|email',
            'message' => 'required'
        ]);

        $keys = ['name', 'phone', 'email', 'message'];
        $record = new model();
        foreach ($keys as $key) {
            $record->$key = $request->$key;
        }
        $record->save();

        return response(['status' => 'success', 'record' => $record, 'code' => 200]);
    }

    public function edit($id) {
        $record = model::find($id);
        return response(['status' => 'success', 'record' => $record, 'code' => 200]);
    }

    public function update(Request $request) {
        $request->validate([
            'name' => 'required', 
            'phone' => 'required',
            'email'=> 'required|email',
            'message' => 'required'
        ]);

        $record = model::find($request->id);
        $keys = ['name', 'phone', 'email', 'message'];
        foreach ($keys as $key) {
            $upd[$key] = $request->$key;
        }
        $record->update($upd);

        return response(['status' => 'success', 'record' => $record, 'code' => 200]);
    }

    public function delete($id) {
        $record = model::find($id)->delete();
        return response(['status' => 'success', 'message' => 'Comment Deleted Successfully', 'code' => 200]);
    }
}
