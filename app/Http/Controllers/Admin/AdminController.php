<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Property;
use App\Models\Amenity;
use App\Models\Feature;
use App\Models\Inquiry;
use App\Models\Viewing;
use App\Models\Registration;

class AdminController extends Controller
{
    public function index() {
        return view("Admin.Index");
    }

    public function chart_data() {
        $data["properties"] = Property::all()->count();
        $data["inquiries"] = Inquiry::all()->count();
        $data["viewings"] = Viewing::all()->count();
        $data["registrations"] = Registration::all()->count();

        $data["props_cats"] = [
            "sale" => Property::all()->where("cat", "For Sale")->count(),
            "lease" => Property::all()->where("cat", "For Lease")->count(),
        ];

        $records = Property::selectRaw('properties.id, properties.name, (Select Count(id) from Viewings 
                                        Where property_id = properties.id) As viewings')
                                        ->orderBy('viewings', 'desc')->limit(7)->get();
        foreach ($records as $record) {
            $data["props_views"][$record["name"]] = $record["viewings"];
        }

        $records = Property::selectRaw('properties.id, properties.name, (Select Count(id) from Amenities 
                                        Where property_id = properties.id) As amens, (Select Count(id) from Features 
                                        Where property_id = properties.id) As feats')
                                        ->orderBy('amens', 'desc')->limit(7)->get();

        $data["props_af"]["names"] = $data["props_af"]["amens"] = $data["props_af"]["feats"] = [];
        foreach ($records as $record) {
            array_push($data["props_af"]["names"], $record["name"]);
            array_push($data["props_af"]["amens"], $record["amens"]);
            array_push($data["props_af"]["feats"], $record["feats"]);
        }

        return response($data);
    }
}
