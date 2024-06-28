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

// CONTACT US ROUTES
// GET METHOD ROUTES ENDS

// POST METHOD ROUTES STARTS
Route::middleware(['auth:sanctum'])->group(function () {
    Route::get("/me", [DeviceController::class, 'me'])->name('me');
    Route::post('/create_member', [DeviceController::class, 'api_create_member'])->name('api_create_member');
    Route::post('/update_member/{id}', [DeviceController::class, 'api_update_member'])->name('api_update_member');
    Route::post('/add_gallery', [DeviceController::class, 'api_add_gallery'])->name('api_add_gallery');
    Route::post('/add_photos', [DeviceController::class, 'api_add_photos'])->name('api_add_photos');
    Route::get('/view-pending-requests', [DeviceController::class, 'api_view_pending_requests'])->name('api_view_pending_requests');
    Route::get('/my-posts', [DeviceController::class, 'api_my_posts'])->name('api_my_posts');
    Route::get('/accept/{id}', [DeviceController::class, 'api_accept'])->name('api_accept');
    Route::get('/reject/{id}', [DeviceController::class, 'api_reject'])->name('api_reject');
    Route::get('/logout', [DeviceController::class, 'api_logout'])->name('api_logout');
    Route::get("/view-messages", [DeviceController::class, 'api_view_messages'])->name('api_view_messages');
    Route::get("/message/{id}", [DeviceController::class, 'api_view_message_id'])->name('api_view_message_id');
    Route::post("/add-notice", [DeviceController::class, 'api_add_notice'])->name('api_add_notice');
});
Route::post('/login', [DeviceController::class, 'api_login'])->name('api_login');
// POST METHOD ROUTES ENDS