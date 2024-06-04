<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/reports', function () {
    return view('reports');
})->name('reports');

Route::get('/calendar', function () {
    return view('calendar');
})->name('calendar');

Route::get('/tenders', function () {
    return view('tenders');
})->name('tenders');

Route::get('/highchart', function () {
    return view('highchart');
})->name('highchart');

Route::get('/barchart', function () {
    return view('barchart');
})->name('barchart');

Route::get('/tenderprofile', function () {
    return view('tenderprofile');
})->name('tenderprofile');

Route::get('/form1', function () {
    return view('form1');
})->name('form1');

Route::get('/form2', function () {
    return view('form2');
})->name('form2');


use App\Http\Controllers\MemberController;
Route::get('/add_member', [MemberController::class, 'add_member'])->name('add_member');
Route::post('/add_member', [MemberController::class, 'save_member'])->name('save_member');

Route::get('/view_members', [MemberController::class, 'view_members'])->name('view_members');