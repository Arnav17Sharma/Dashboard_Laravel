<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\GalleryController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('user_views.home');
});

// ADMIN ROUTES STARTS
Route::get('/admin/dashboard', [MemberController::class, 'dashboard'])->name('dashboard');
Route::get('/logout', [MemberController::class, 'logout']) -> name('logout');
// Route::get('/admin/dashboard', function () {
//     return view('verified_views.dashboard');
// })->name('dashboard');

Route::get('/admin/reports', function () {
    return view('verified_views.reports');
})->name('reports');

Route::get('/admin/calendar', function () {
    return view('verified_views.calendar');
})->name('calendar');

Route::get('/admin/tenders', function () {
    return view('verified_views.tenders');
})->name('tenders');

Route::get('/admin/highchart', function () {
    return view('verified_views.highchart');
})->name('highchart');

Route::get('/admin/barchart', function () {
    return view('verified_views.barchart');
})->name('barchart');

Route::get('/admin/tenderprofile', function () {
    return view('verified_views.tenderprofile');
})->name('tenderprofile');

Route::get('/admin/form1', function () {
    return view('verified_views.form1');
})->name('form1');

Route::get('/admin/form2', function () {
    return view('verified_views.form2');
})->name('form2');





// Route::get('/admin/add_member', [MemberController::class, 'add_member'])->name('add_member');
Route::get('/admin/add_member', [MemberController::class, 'add_member'])->name('add_member');
Route::post('/admin/add_member', [MemberController::class, 'save_member'])->name('save_member');

Route::get('/admin/view_members', [MemberController::class, 'view_members'])->name('view_members');
Route::post('/admin/view_members', [MemberController::class, 'edit_role_members'])->name('edit_role_members');


Route::get('/admin/edit_member/{id}', [MemberController::class, 'edit_member'])->name('edit_member');
Route::post('/admin/update_member/{id}', [MemberController::class, 'update_member'])->name('update_member');



Route::get('/admin/add_gallery', [GalleryController::class, 'add_gallery'])->name('add_gallery');
Route::post('/admin/add_gallery', [GalleryController::class, 'add_gallery_post'])->name('add_gallery_post');
Route::get('/admin/view_gallery', [GalleryController::class, 'view_gallery'])->name('view_gallery');
Route::get('/admin/view_pending_requests', [GalleryController::class, 'view_pending_requests'])->name('view_pending_requests');
Route::get('/admin/view_all_requests_for_member', [GalleryController::class, 'view_all_requests_for_member'])->name('view_all_requests_for_member');
Route::get('/admin/view_gallery/{id}', [GalleryController::class, 'view_gallery_id'])->name('view_gallery_id');
Route::get('/admin/view_pending/{id}', [GalleryController::class, 'view_pending'])->name('view_pending');
Route::post('/admin/view_gallery/{id}', [GalleryController::class, 'view_gallery_id_post'])->name('view_gallery_id_post');

Route::get('/admin/view_pending/accept/{id}', [GalleryController::class, 'accept_gallery'])->name('accept_gallery');
Route::get('/admin/view_pending/reject/{id}', [GalleryController::class, 'reject_gallery'])->name('reject_gallery');

// ADMIN ROUTES ENDS





// USER ROUTES STARTS

Route::get('/home', function () {
    return view('user_views.home');
})->name('home');

Route::get('/gallery', [GalleryController::class, 'user_view_gallery'])->name('all_gallery');
Route::get('/gallery/{id}', [GalleryController::class, 'user_view_gallery_id'])->name('user_view_gallery_id');




// LOGIN FORM
Route::get('/login', function () {
    return view('user_views.login_form');
})->name('login');

Route::post('/login', [MemberController::class, 'login_post'])->name('login_post');