<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\InquiryController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/inquiries', [InquiryController::class, 'all']);
Route::post('/inquiries/create', [InquiryController::class, 'create']);
Route::get('/inquiries/get/{id}', [InquiryController::class, 'edit']);
Route::post('/inquiries/update', [InquiryController::class, 'update']);
Route::get('/inquiries/delete/{id}', [InquiryController::class, 'delete']);