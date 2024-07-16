<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\AwardController;
use App\Http\Controllers\Admin\InquiryController;
use App\Http\Controllers\Admin\PropertyController;
use App\Http\Controllers\Admin\AmenityController;
use App\Http\Controllers\Admin\SettingController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('Homepage/index');
});

Route::get('/about-us', function () {
    return view('Homepage/AboutUs');
});

Route::get('/for-sale', function () {
    return view('Homepage/ForSale');
});

Route::get('/for-lease', function () {
    return view('Homepage/ForLease');
});

Route::get('/property', function () {
    return view('Homepage/SingleProperties');
});

Route::get('/contact-us', function () {
    return view('Homepage/ContactUs');
});

Route::get('/loan-calculator', function () {
    return view('Homepage/LoanCalculator');
});

Route::get('/submit-property', function () {
    return view('Homepage/SubmitProperty');
});



Route::prefix('admin/awards')->group(function () {
    Route::get('/', [AwardController::class, 'index']);
    Route::post('/', [AwardController::class, 'all']);
    Route::post('/add', [AwardController::class, 'add']);
    Route::get('/edit/{id}', [AwardController::class, 'edit']);
    Route::post('/upd', [AwardController::class, 'upd']);
    Route::get('/del/{id}', [AwardController::class, 'del']);
});

Route::prefix('admin/inquiries')->group(function () {
    Route::get('/', [InquiryController::class, 'index']);
    Route::post('/', [InquiryController::class, 'all']);
    Route::post('/add', [InquiryController::class, 'add']);
    Route::get('/edit/{id}', [InquiryController::class, 'edit']);
    Route::post('/upd', [InquiryController::class, 'upd']);
    Route::get('/del/{id}', [InquiryController::class, 'del']);
});

Route::prefix('admin/properties')->group(function () {
    Route::get('/', [PropertyController::class, 'index']);
    Route::post('/', [PropertyController::class, 'all']);
    Route::post('/add', [PropertyController::class, 'add']);
    Route::get('/edit/{id}', [PropertyController::class, 'edit']);
    Route::post('/upd', [PropertyController::class, 'upd']);
    Route::get('/del/{id}', [PropertyController::class, 'del']);
});

Route::prefix('admin/amenities')->group(function () {
    Route::get('/', [AmenityController::class, 'index']);
    Route::post('/', [AmenityController::class, 'all']);
    Route::post('/add', [AmenityController::class, 'add']);
    Route::get('/edit/{id}', [AmenityController::class, 'edit']);
    Route::post('/upd', [AmenityController::class, 'upd']);
    Route::get('/del/{id}', [AmenityController::class, 'del']);
});

Route::prefix('admin/settings')->group(function () {
    Route::get('/', [SettingController::class, 'index']);
    Route::get('/edit', [SettingController::class, 'edit']);
    Route::post('/upd', [SettingController::class, 'upd']);
});

