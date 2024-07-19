<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\User\PageController;

use App\Http\Controllers\Admin\PropertyController;
use App\Http\Controllers\Admin\AmenityController;
use App\Http\Controllers\Admin\FeatureController;
use App\Http\Controllers\Admin\PictureController;
use App\Http\Controllers\Admin\VideoController;
use App\Http\Controllers\Admin\AwardController;
use App\Http\Controllers\Admin\InquiryController;
use App\Http\Controllers\Admin\ViewingController;
use App\Http\Controllers\Admin\RegistrationController;
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

Route::get('/', [PageController::class, 'index']);
Route::get('/about-us', [PageController::class, 'about_us']);
Route::get('/for-sale', [PageController::class, 'for_sale']);
Route::get('/for-lease', [PageController::class, 'for_lease']);
Route::get('/property/{id}', [PageController::class, 'property']);
Route::get('/contact-us', [PageController::class, 'contact_us']);
Route::get('/loan-calculator', [PageController::class, 'loan_calculator']);
Route::get('/submit-property', [PageController::class, 'submit_property']);



Route::get('/settings', [PageController::class, 'settings']);
Route::post('/send-inquiry', [PageController::class, 'send_inquiry']);
Route::post('/request-viewing', [PageController::class, 'request_viewing']);



Route::prefix('admin/properties')->group(function () {
    Route::get('/', [PropertyController::class, 'index']);
    Route::post('/', [PropertyController::class, 'all']);
    Route::post('/add', [PropertyController::class, 'add']);
    Route::get('/edit/{id}', [PropertyController::class, 'edit']);
    Route::post('/upd', [PropertyController::class, 'upd']);
    Route::get('/del/{id}', [PropertyController::class, 'del']);

    Route::get('/change/{id}/{status}', [PropertyController::class, 'change_status']);
});

Route::prefix('admin/amenities')->group(function () {
    Route::get('/', [AmenityController::class, 'index']);
    Route::post('/', [AmenityController::class, 'all']);
    Route::post('/add', [AmenityController::class, 'add']);
    Route::get('/edit/{id}', [AmenityController::class, 'edit']);
    Route::post('/upd', [AmenityController::class, 'upd']);
    Route::get('/del/{id}', [AmenityController::class, 'del']);
});

Route::prefix('admin/features')->group(function () {
    Route::get('/', [FeatureController::class, 'index']);
    Route::post('/', [FeatureController::class, 'all']);
    Route::post('/add', [FeatureController::class, 'add']);
    Route::get('/edit/{id}', [FeatureController::class, 'edit']);
    Route::post('/upd', [FeatureController::class, 'upd']);
    Route::get('/del/{id}', [FeatureController::class, 'del']);
});

Route::prefix('admin/pictures')->group(function () {
    Route::get('/', [PictureController::class, 'index']);
    Route::post('/', [PictureController::class, 'all']);
    Route::post('/add', [PictureController::class, 'add']);
    Route::get('/edit/{id}', [PictureController::class, 'edit']);
    Route::post('/upd', [PictureController::class, 'upd']);
    Route::get('/del/{id}', [PictureController::class, 'del']);
});

Route::prefix('admin/videos')->group(function () {
    Route::get('/', [VideoController::class, 'index']);
    Route::post('/', [VideoController::class, 'all']);
    Route::post('/add', [VideoController::class, 'add']);
    Route::get('/edit/{id}', [VideoController::class, 'edit']);
    Route::post('/upd', [VideoController::class, 'upd']);
    Route::get('/del/{id}', [VideoController::class, 'del']);
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

Route::prefix('admin/viewings')->group(function () {
    Route::get('/', [ViewingController::class, 'index']);
    Route::post('/', [ViewingController::class, 'all']);
    Route::post('/add', [ViewingController::class, 'add']);
    Route::get('/edit/{id}', [ViewingController::class, 'edit']);
    Route::post('/upd', [ViewingController::class, 'upd']);
    Route::get('/del/{id}', [ViewingController::class, 'del']);

    Route::get('/get-related', [ViewingController::class, 'get_related']);
    Route::get('/change/{id}/{status}', [ViewingController::class, 'change_status']);
});

Route::prefix('admin/registrations')->group(function () {
    Route::get('/', [RegistrationController::class, 'index']);
    Route::post('/', [RegistrationController::class, 'all']);
    Route::post('/add', [RegistrationController::class, 'add']);
    Route::get('/edit/{id}', [RegistrationController::class, 'edit']);
    Route::post('/upd', [RegistrationController::class, 'upd']);
    Route::get('/del/{id}', [RegistrationController::class, 'del']);

    Route::get('/get-related', [RegistrationController::class, 'get_related']);
    Route::get('/change/{id}/{status}', [RegistrationController::class, 'change_status']);
});

Route::prefix('admin/settings')->group(function () {
    Route::get('/', [SettingController::class, 'index']);
    Route::get('/edit', [SettingController::class, 'edit']);
    Route::post('/upd', [SettingController::class, 'upd']);
});

