<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;

use App\Models\Setting;
use App\Models\Property;
use App\Models\Amenity;
use App\Models\Feature;
use App\Models\Image;
use App\Models\Video;
use App\Models\Inquiry;
use App\Models\Viewing;
use App\Models\Registration;

use App\Jobs\SendInquiryMail;
use App\Jobs\SendAViewingMail;

class PageController extends Controller
{
    public function index() {
        $where = ['status' => 'Published'];
        $props = Property::with('images')->where($where)->limit(4)->get();

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
        $records = Property::with('images')->where($where)->get();

        $data = [
            "records" => $records,
        ];

        return view('User/ForSale')->with("data", $data);
    }

    public function for_lease() {
        $where = ['cat' => 'For Lease', 'status' => 'Published'];
        $records = Property::with('images')->where($where)->get();

        $data = [
            "records" => $records,
        ];

        return view('User/ForLease')->with("data", $data);
    }

    public function property($id) {;
        $record = Property::with('images', 'amenities', 'features', 'videos')->where('id', $id)->first();
        $where = [
            ['cat', '=', $record->cat],
            ['status', '=', 'Published'],
            ['id','!=', $record->id],
        ];
        $props = Property::with('images')->where($where)->limit(4)->get();

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

        $record = Viewing::with('property')->where("id", $record->id)->first();
        $mail_data = [
            "id" => $record->id,
            "name" => $record->name,
            "property" => $record->property->name,
            "date" => Carbon::parse($record->date)->toFormattedDateString(),
            "time" => Carbon::createFromFormat('H:i:s', $record->time)->format('g:i a'),
            "msg" => $record->msg,
        ];
        SendAViewingMail::dispatch($mail_data);

        return response(['msg' => "Submitted Viewing Request"]);
    }

    public function send_registration(Request $request) {
        $request->validate([
            'name' => 'required',
            'img' => 'required|image',
            'phone' => 'required',
            'email' => 'required|email',
            'msg' => 'required',
            'status' => 'required',
            'prop_name' => 'required',
            'cat' => 'required',
            'type' => 'required',
            'price' => 'required',
            'lice' => 'required',
            'locat' => 'required',
            'map' => 'required',
            'desc' => 'required',
            'prop_status' => 'required',
            'amens' => 'required',
            'feats' => 'required',
            'imgs' => 'required',
            'vids' => 'required',
        ]);

        $property = new Property();
        $keys = ['name', 'cat', 'type', 'price', 'locat', 'map', 'lice', 'desc', 'status'];
        foreach ($keys as $key) {
            if ($key == "name" || $key == "status") {
                $property->$key = $request["prop_$key"];
            }
            else {
                $property->$key = $request->$key;
            }
        }
        $property->save();

        $amens = explode("\r\n", $request->amens);
        foreach ($amens as $amen) {
            $record = new Amenity();
            $record->name = $amen;
            $record->property_id = $property->id;
            $record->save();  
        }

        $feats = explode("\r\n", $request->feats);
        foreach ($feats as $feat) {
            $record = new Feature();
            $record->name = $feat;
            $record->property_id = $property->id;
            $record->save();  
        }

        if($request->hasFile('imgs')) {
            foreach ($request->imgs as $file) {
                $filename = mt_rand() . '.'.$file->clientExtension();
                $file->move('uploads/Properties/Images', $filename );
    
                $record = new Image();
                $record->img = $filename;
                $record->property_id = $property->id;
                $record->save();   
            } 
        }

        if($request->hasFile('vids')) {
            foreach ($request->vids as $file) {
                $filename = mt_rand() . '.'.$file->clientExtension();
                $file->move('uploads/Properties/Videos', $filename );
    
                $record = new Video();
                $record->vid = $filename;
                $record->property_id = $property->id;
                $record->save();   
            } 
        }

        $registration = new Registration();
        $keys = ['name', 'img', 'phone', 'email', 'msg', 'status', 'property_id'];
        foreach ($keys as $key) {
            if ($key == "img") {
                if($request->hasFile($key)) {
                    $file = $request->$key;
                    $filename = mt_rand() . '.'.$file->clientExtension();
                    $file->move('uploads/IDs', $filename );
                    $registration->$key = $filename;
                }
            }
            else if ($key == "property_id") {
                $registration->$key = $property->id;
            }
            else {
                $registration->$key = $request->$key;
            }
        }
        $registration->save();

        return response(['msg' => "Property Submitted"]);
    }
}
