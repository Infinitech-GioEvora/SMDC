<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Setting;

class PageController extends Controller
{
    public function index() {
        return view('User/Index');
    }

    public function about_us() {
        return view('User/AboutUs');
    }

    public function for_sale() {
        return view('User/ForSale');
    }

    public function for_lease() {
        return view('User/ForLease');
    }

    public function property() {
        return view('User/Property');
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
}
