<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\NoticeBoardController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\DeviceController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// GET METHOD ROUTES STARTS
// GALLERY ROUTES
Route::get("/gallery", [DeviceController::class, 'api_eit_photo_gallery'])->name('api_eit_photo_gallery');
Route::get("/gallery/{id}", [DeviceController::class, 'api_eit_photo_gallery_id'])->name('api_eit_photo_gallery_id');

// NOTICE BOARD ROUTES
Route::get("/notice/{id}", [DeviceController::class, 'api_get_notice_id'])->name('api_get_notice_id');
Route::get("/notice-board", [DeviceController::class, 'api_get_notice_board'])->name('api_get_notice_board');
Route::get("/news", [DeviceController::class, 'api_news'])->name('api_news');
Route::get("/tenders", [DeviceController::class, 'api_tenders'])->name('api_tenders');
Route::get("/orders", [DeviceController::class, 'api_orders'])->name('api_orders');
Route::get("/circulars", [DeviceController::class, 'api_circulars'])->name('api_circulars');
Route::get("/recruitments", [DeviceController::class, 'api_recruitments'])->name('api_recruitments');
Route::get("/notifications", [DeviceController::class, 'api_notifications'])->name('api_notifications');
Route::get("/types", [DeviceController::class, 'api_get_types'])->name('api_get_types');

// MEMBER ROUTES
Route::get("/member-roles", [DeviceController::class, 'api_get_member_roles'])->name('api_get_member_roles');
Route::get("/members", [DeviceController::class, 'api_get_members'])->name('api_get_members');
Route::get("/member/{id}", [DeviceController::class, 'api_get_member_id'])->name('api_get_member_id');
// GET METHOD ROUTES ENDS


// POST METHOD ROUTES STARTS

// POST METHOD ROUTES ENDS