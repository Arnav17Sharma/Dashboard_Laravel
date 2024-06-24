<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\NoticeBoardController;
use App\Http\Controllers\MessageController;

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
Route::get('/admin/view_orders', [NoticeBoardController::class, 'view_orders'])->name('view_orders');
Route::get('/admin/view_circulars', [NoticeBoardController::class, 'view_circulars'])->name('view_circulars');
Route::get('/admin/view_recruitments', [NoticeBoardController::class, 'view_recruitments'])->name('view_recruitments');
Route::get('/admin/view_notifications', [NoticeBoardController::class, 'view_notifications'])->name('view_notifications');
Route::get('/admin/view_board/{id}', [NoticeBoardController::class, 'view_board_id'])->name('view_board_id');
// NOTICE BOARD ROUTES ENDS

// MESSAGES ROUTES STARTS

Route::get('/admin/view_messages', [MessageController::class, 'view_messages'])->name('view_messages');
Route::get('/admin/message/{id}', [MessageController::class, 'view_message_id'])->name('view_message_id');
Route::get('/contact_us', [MessageController::class, 'view_contact_us'])->name('view_contact_us');
Route::post('/contact_us', [MessageController::class, 'view_message_id_post'])->name('view_message_id_post');

// MESSAGES ROUTES ENDS



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

// Route::get('/home', function () {
//     return view('e&it_views.home');
// })->name('e&it_views.home');
Route::get('/home', [NoticeBoardController::class, 'view_home'])->name('view_home');
Route::get('/acts_and_rules', [NoticeBoardController::class, 'view_acts_and_rules'])->name('view_acts_and_rules');
Route::get('/departmental_activities', [NoticeBoardController::class, 'view_departmental_activities'])->name('view_departmental_activities');
Route::get('/departmental_structure', [NoticeBoardController::class, 'view_departmental_structure'])->name('view_departmental_structure');
Route::get('/services', [NoticeBoardController::class, 'view_services'])->name('view_services');
Route::get('/program_and_schemes', [NoticeBoardController::class, 'view_program_and_schemes'])->name('view_program_and_schemes');
Route::get('/right_to_information', [NoticeBoardController::class, 'view_right_to_information'])->name('view_right_to_information');
Route::get('/subject_matter_art_scheme', [NoticeBoardController::class, 'view_subject_matter_art_scheme'])->name('view_subject_matter_art_scheme');
Route::get('/whos_who', [NoticeBoardController::class, 'view_whos_who'])->name('view_whos_who');
Route::get('/organisation_chart', [NoticeBoardController::class, 'view_organisation_chart'])->name('view_organisation_chart');
Route::get('/achievements', [NoticeBoardController::class, 'view_achievements'])->name('view_achievements');
// Route::get('/contact_us', [NoticeBoardController::class, 'view_contact_us'])->name('view_contact_us');

Route::get('/chips_activity', function () {
    return view('e&it_views.chips_activity');
})->name('e&it_views.chips_activity');

Route::get('/about_chips', function () {
    return view('e&it_views.about_chips');
})->name('e&it_views.about_chips');

Route::get('/statewide-area-network', function () {
    return view('e&it_views.StateWide');
})->name('e&it_views.StateWide');

Route::get('/bharatnet', function () {
    return view('e&it_views.BharatNet');
})->name('e&it_views.BharatNet');

Route::get('/statewide-area-network-project', function () {
    return view('e&it_views.StateWide');
})->name('e&it_views.StateWide');

Route::get('/bastarnet', function () {
    return view('e&it_views.BastarNet');
})->name('e&it_views.BastarNet');

Route::get('/wifi-city', function () {
    return view('e&it_views.Wi-Fi');
})->name('e&it_views.Wi-Fi');

Route::get('/bastarnet', function () {
    return view('e&it_views.BastarNet');
})->name('e&it_views.BastarNet');

Route::get('/software-park', function () {
    return view('e&it_views.Establishment');
})->name('e&it_views.Establishment');

Route::get('/state-data-center', function () {
    return view('e&it_views.State-Data');
})->name('e&it_views.State-Data');

Route::get('/state-portal', function () {
    return view('e&it_views.State-Portal');
})->name('e&it_views.State-Portal');

Route::get('/e-district', function () {
    return view('e&it_views.E');
})->name('e&it_views.E');

Route::get('/common-service-center', function () {
    return view('e&it_views.Common');
})->name('e&it_views.Common');

Route::get('/aadhar-authentication-system', function () {
    return view('e&it_views.Aadhar');
})->name('e&it_views.Aadhar');

Route::get('/integrated-proactive-e-governance-2', function () {
    return view('e&it_views.Integrated');
})->name('e&it_views.Integrated');

Route::get('/cg-haat', function () {
    return view('e&it_views.Chhattisgarh-Haat');
})->name('e&it_views.Chhattisgarh-Haat');

Route::get('/cg-darpan', function () {
    return view('e&it_views.Chhattisgarh-Darpan');
})->name('e&it_views.Chhattisgarh-Darpan');

Route::get('/cg-tika-web-portal', function () {
    return view('e&it_views.CG');
})->name('e&it_views.CG');

Route::get('/quantifiable-data-commission', function () {
    return view('e&it_views.Web');
})->name('e&it_views.Web');

Route::get('/digital-secretariat', function () {
    return view('e&it_views.Digital');
})->name('e&it_views.Digital');

Route::get('/e-procurement', function () {
    return view('e&it_views.E-Procurement');
})->name('e&it_views.E-Procurement');

Route::get('/central-project-monitoring-unit', function () {
    return view('e&it_views.Central');
})->name('e&it_views.Central');

Route::get('/capacity-development', function () {
    return view('e&it_views.Capacity');
})->name('e&it_views.Capacity');

Route::get('/buildnext', function () {
    return view('e&it_views.BuildNext');
})->name('e&it_views.BuildNext');

Route::get('/payment-godhan-nyay-yojana', function () {
    return view('e&it_views.Payment');
})->name('e&it_views.Payment');

Route::get('/e-samiksha', function () {
    return view('e&it_views.e-Samiksha');
})->name('e&it_views.e-Samiksha');

Route::get('/cg-camp-portal', function () {
    return view('e&it_views.CG-Camp');
})->name('e&it_views.CG-Camp');

Route::get('/e-punchboard', function () {
    return view('e&it_views.e-Punchboard');
})->name('e&it_views.e-Punchboard');

Route::get('/it_enabled-services', function () {
    return view('e&it_views.Information');
})->name('e&it_views.Information');

Route::get('/geographic-info-system-div', function () {
    return view('e&it_views.Geographic');
})->name('e&it_views.Geographic');

Route::get('/incubator-cum-accelerator-institute', function () {
    return view('e&it_views.Incubator');
})->name('e&it_views.Incubator');

Route::get('/help', function () {
    return view('e&it_views.help');
})->name('e&it_views.help');

Route::get('/terms-of-use', function () {
    return view('e&it_views.terms_of_use');
})->name('e&it_views.terms_of_use');

Route::get('/terms-and-conditions', function () {
    return view('e&it_views.terms_and_conditions');
})->name('e&it_views.terms_and_conditions');

Route::get('/site-map', function () {
    return view('e&it_views.site_map');
})->name('e&it_views.site_map');

Route::get('/accessibility', function () {
    return view('e&it_views.Accessibility');
})->name('e&it_views.Accessibility');

Route::get('/copyright', function () {
    return view('e&it_views.Copyright');
})->name('e&it_views.Copyright');

Route::get('/disclaimer', function () {
    return view('e&it_views.Disclaimer');
})->name('e&it_views.Disclaimer');

Route::get('/hyperlink', function () {
    return view('e&it_views.Hyperlink');
})->name('e&it_views.Hyperlink');

Route::get('/privacy', function () {
    return view('e&it_views.Privacy');
})->name('e&it_views.Privacy');

Route::get('/feedback', function () {
    return view('e&it_views.Feedback');
})->name('e&it_views.Feedback');

Route::get('/iso-9001-2000-certified', function () {
    return view('e&it_views.ISO');
})->name('e&it_views.ISO');

Route::get('/related-links', function () {
    return view('e&it_views.related_links');
})->name('e&it_views.related_links');

Route::get('/archive', function () {
    return view('e&it_views.Archive');
})->name('e&it_views.Archive');

Route::get('/best-practice-videos', function () {
    return view('e&it_views.Best');
})->name('e&it_views.Best');

// Route::get('/acts_and_rules', function () {
//     return view('e&it_views.acts_and_rules');
// })->name('e&it_views.acts_and_rules');

// Route::get('/departmental_activities', function () {
//     return view('e&it_views.departmental_activities');
// })->name('e&it_views.departmental_activities');

// Route::get('/departmental_structure', function () {
//     return view('e&it_views.departmental_structure');
// })->name('e&it_views.departmental_structure');

// Route::get('/services', function () {
//     return view('e&it_views.services');
// })->name('e&it_views.services');

// Route::get('/program_and_schemes', function () {
//     return view('e&it_views.program_and_schemes');
// })->name('e&it_views.program_and_schemes');

// Route::get('/right_to_information', function () {
//     return view('e&it_views.right_to_information');
// })->name('e&it_views.right_to_information');

// Route::get('/subject_matter_art_scheme', function () {
//     return view('e&it_views.subject_matter_art_scheme');
// })->name('e&it_views.subject_matter_art_scheme');

// Route::get('/whos_who', function () {
//     return view('e&it_views.whos_who');
// })->name('e&it_views.whos_who');

// Route::get('/tenders', function () {
//     return view('e&it_views.tenders');
// })->name('e&it_views.tenders');

// Route::get('/notifications', function () {
//     return view('e&it_views.notifications');
// })->name('e&it_views.notifications');

// Route::get('/orders', function () {
//     return view('e&it_views.orders');
// })->name('e&it_views.orders');

// Route::get('/recruitment', function () {
//     return view('e&it_views.recruitment');
// })->name('e&it_views.recruitment');

// Route::get('/news', function () {
//     return view('e&it_views.news');
// })->name('e&it_views.news');

// Route::get('/circulars', function () {
//     return view('e&it_views.circulars');
// })->name('e&it_views.circulars');

// Route::get('/notice_board', function () {
//     return view('e&it_views.notice_board');
// })->name('e&it_views.notice_board');


// Route::get('/organisation_chart', function () {
//     return view('e&it_views.organisation_chart');
// })->name('e&it_views.organisation_chart');

// Route::get('/achievements', function () {
//     return view('e&it_views.achievements');
// })->name('e&it_views.achievements');


Route::get('/gallery', [GalleryController::class, 'eit_photo_gallery'])->name('eit_photo_gallery');
Route::get('/gallery/{id}', [GalleryController::class, 'eit_photo_gallery_id'])->name('eit_photo_gallery_id');

Route::get('/view_notice/{id}', [NoticeBoardController::class, 'eit_view_notice_id'])->name('eit_view_notice_id');
Route::get('/notice_board', [NoticeBoardController::class, 'eit_view_notice_board'])->name('eit_view_notice_board');
Route::get('/news', [NoticeBoardController::class, 'eit_view_news'])->name('eit_view_news');
Route::get('/tenders', [NoticeBoardController::class, 'eit_view_tenders'])->name('eit_view_tenders');
Route::get('/orders', [NoticeBoardController::class, 'eit_view_orders'])->name('eit_view_orders');
Route::get('/circulars', [NoticeBoardController::class, 'eit_view_circulars'])->name('eit_view_circulars');
Route::get('/recruitments', [NoticeBoardController::class, 'eit_view_recruitments'])->name('eit_view_recruitments');
Route::get('/notifications', [NoticeBoardController::class, 'eit_view_notifications'])->name('eit_view_notifications');

// LOGIN FORM
Route::get('/login', [MemberController::class, 'login_get'])->name('login_get');
Route::post('/login', [MemberController::class, 'login_post'])->name('login_post');








// API ROUTES
Route::get('/api/gallery', [GalleryController::class, 'api_eit_photo_gallery'])->name('api_eit_photo_gallery');
Route::get('/api/gallery/{id}', [GalleryController::class, 'api_eit_photo_gallery_id'])->name('api_eit_photo_gallery_id');


// Route::get('/api/notices/', [NoticeBoardController::class, 'api_eit_photo_gallery_id'])->name('api_eit_photo_gallery_id');
// Route::get('/api/news/', [NoticeBoardController::class, 'api_eit_photo_gallery_id'])->name('api_eit_photo_gallery_id');
// Route::get('/api/tenders/', [NoticeBoardController::class, 'api_eit_photo_gallery_id'])->name('api_eit_photo_gallery_id');
// Route::get('/api/circulars/', [NoticeBoardController::class, 'api_eit_photo_gallery_id'])->name('api_eit_photo_gallery_id');
// Route::get('/api/recruitments/', [NoticeBoardController::class, 'api_eit_photo_gallery_id'])->name('api_eit_photo_gallery_id');
// Route::get('/api/notifications/', [NoticeBoardController::class, 'api_eit_photo_gallery_id'])->name('api_eit_photo_gallery_id');