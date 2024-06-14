<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\NoticeBoardController;

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
    
    return view('verified_views.reports',);
})->name('reports');

Route::get('/admin/calendar', function () {
    
    return view('verified_views.calendar',);
})->name('calendar');

Route::get('/admin/tenders', function () {
    
    return view('verified_views.tenders',);
})->name('tenders');

Route::get('/admin/highchart', function () {
    
    return view('verified_views.highchart',);
})->name('highchart');

Route::get('/admin/barchart', function () {
    
    return view('verified_views.barchart',);
})->name('barchart');

Route::get('/admin/tenderprofile', function () {
    
    return view('verified_views.tenderprofile',);
})->name('tenderprofile');

Route::get('/admin/form1', function () {
    
    return view('verified_views.form1',);
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



// NOTICE BOARD ROUTES STARTS
Route::get('/admin/add_notice_board', [NoticeBoardController::class, 'add_notice_board'])->name('add_notice_board');
Route::post('/admin/add_notice_board', [NoticeBoardController::class, 'add_notice_board_post'])->name('add_notice_board_post');
Route::get('/admin/view_notices', [NoticeBoardController::class, 'view_notices'])->name('view_notices');
Route::get('/admin/view_tenders', [NoticeBoardController::class, 'view_tenders'])->name('view_tenders');
Route::get('/admin/view_board/{id}', [NoticeBoardController::class, 'view_board_id'])->name('view_board_id');
// NOTICE BOARD ROUTES ENDS


// ADMIN ROUTES ENDS

// USER ROUTES STARTS

Route::get('/user/home', function () {
    return view('user_views.home');
})->name('home');

Route::get('/user/gallery', [GalleryController::class, 'user_view_gallery'])->name('all_gallery');
Route::get('/user/gallery/{id}', [GalleryController::class, 'user_view_gallery_id'])->name('user_view_gallery_id');




// LOGIN FORM
Route::get('/user/login', function () {
    return view('user_views.login_form');
})->name('login');

Route::post('user/login', [MemberController::class, 'login_post'])->name('login_post');










// E & IT

Route::get('/home', function () {
    return view('e&it_views.home');
})->name('e&it_views.home');

Route::get('/acts_and_rules', function () {
    return view('e&it_views.acts_and_rules');
})->name('e&it_views.acts_and_rules');

Route::get('/departmental_activities', function () {
    return view('e&it_views.departmental_activities');
})->name('e&it_views.departmental_activities');

Route::get('/departmental_structure', function () {
    return view('e&it_views.departmental_structure');
})->name('e&it_views.departmental_structure');

Route::get('/services', function () {
    return view('e&it_views.services');
})->name('e&it_views.services');

Route::get('/program_and_schemes', function () {
    return view('e&it_views.program_and_schemes');
})->name('e&it_views.program_and_schemes');

Route::get('/right_to_information', function () {
    return view('e&it_views.right_to_information');
})->name('e&it_views.right_to_information');

Route::get('/subject_matter_art_scheme', function () {
    return view('e&it_views.subject_matter_art_scheme');
})->name('e&it_views.subject_matter_art_scheme');

Route::get('/whos_who', function () {
    return view('e&it_views.whos_who');
})->name('e&it_views.whos_who');

Route::get('/tenders', function () {
    return view('e&it_views.tenders');
})->name('e&it_views.tenders');

Route::get('/notifications', function () {
    return view('e&it_views.notifications');
})->name('e&it_views.notifications');

Route::get('/orders', function () {
    return view('e&it_views.orders');
})->name('e&it_views.orders');

Route::get('/recruitment', function () {
    return view('e&it_views.recruitment');
})->name('e&it_views.recruitment');

Route::get('/news', function () {
    return view('e&it_views.news');
})->name('e&it_views.news');

Route::get('/circulars', function () {
    return view('e&it_views.circulars');
})->name('e&it_views.circulars');

Route::get('/notice_board', function () {
    return view('e&it_views.notice_board');
})->name('e&it_views.notice_board');

Route::get('/contact_us', function () {
    return view('e&it_views.contact_us');
})->name('e&it_views.contact_us');

Route::get('/organisation_chart', function () {
    return view('e&it_views.organisation_chart');
})->name('e&it_views.organisation_chart');

Route::get('/achievements', function () {
    return view('e&it_views.achievements');
})->name('e&it_views.achievements');

Route::get('/achievements', function () {
    return view('e&it_views.achievements');
})->name('e&it_views.achievements');

Route::get('/gallery', [GalleryController::class, 'eit_photo_gallery'])->name('eit_photo_gallery');
Route::get('/gallery/{id}', [GalleryController::class, 'eit_photo_gallery_id'])->name('eit_photo_gallery_id');
