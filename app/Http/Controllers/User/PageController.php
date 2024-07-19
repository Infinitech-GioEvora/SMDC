<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Setting;
use App\Models\Property;
use App\Models\Inquiry;
use App\Models\Viewing;

use App\Jobs\SendInquiryMail;

class PageController extends Controller
{
    public function index() {
        $where = ['status' => 'Published'];
        $props = Property::with('pictures')->where($where)->limit(4)->get();

        $data = [
            'props' => $props
        ];

        return view('User/Index')->with('data', $data);
    }

    public function about_us() {
        return view('User/AboutUs');
    }

    public function for_sale() {
        $where = ['cat' => 'For Sale', 'status' => 'Published'];
        $records = Property::with('pictures')->where($where)->get();

        $data = [
            "records" => $records,
        ];

        return view('User/ForSale')->with("data", $data);
    }

    public function for_lease() {
        $where = ['cat' => 'For Lease', 'status' => 'Published'];
        $records = Property::with('pictures')->where($where)->get();

        $data = [
            "records" => $records,
        ];

        return view('User/ForLease')->with("data", $data);
    }

    public function property($id) {;
        $record = Property::with('pictures', 'amenities', 'features', 'videos')->where('id', $id)->first();
        $where = [
            ['cat', '=', $record->cat],
            ['status', '=', 'Published'],
            ['id','!=', $record->id],
        ];
        $props = Property::with('pictures')->where($where)->limit(4)->get();

        $data = [
            "record" => $record,
            "props" => $props,
        ];

        return view('User/Property')->with('data', $data);
    }

    public function contact_us() {
        return view('User/ContactUs');
    }

    public function loan_calculator() {
        return view('User/LoanCalculator');
    }

    public function submit_property() {
        return view('User/SubmitProperty');
    }

    

    public function settings() {
        $record = Setting::first();

        $data = [
            'record' => $record,
        ];

        return response($data);
    }

    public function send_inquiry(Request $request) {
        $request->validate([
            'name' => 'required', 
            'phone' => 'required',
            'email' => 'required|email',
            'msg' => 'required',
        ]);

        $record = new Inquiry();
        $keys = ['name', 'phone', 'email', 'msg'];
        foreach ($keys as $key) {
            $record->$key = $mail_data[$key] = $request->$key;
        }

        $record->save();

        SendInquiryMail::dispatch($mail_data);
        return response(['msg' => "Submitted Inquiry"]);
    }

    public function request_viewing(Request $request) {
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

        $record = new Viewing();
        $keys = ['name', 'phone', 'email', 'date', 'time', 'msg', 'status', 'property_id'];
        foreach ($keys as $key) {
            $record->$key = $request->$key;
        }

        $record->save();

        return response(['msg' => "Submitted Viewing Request"]);
    }
}
