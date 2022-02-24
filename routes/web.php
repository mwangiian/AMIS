<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdvertController;
use App\Http\Controllers\DepartmentController;

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
    return view('index');
});

Route::get('/profile', function () {
    return view('client/profile/profile');
});

Route::get('/profile/bio-data', function () {
    return view('client/bio-data/bio-data');
});

Route::get('/applications', function () {
    return view('client/applications/applications');
});

Route::get('/notifications', function () {
    return view('client/notifications/notifications');
});

Route::get('/saved', function () {
    return view('client/saved/saved');
});

Route::get('/logbook', function () {
    return view('client/logbook/logbook');
});

Route::get('/evaluation', function () {
    return view('client/evaluation/evaluation');
});

Route::get('/department', function () {
    return view('department/dashboard');
});

Route::get('/department/new-advert', function () {
    return view('department/new-advert/new-advert');
});

Route::get('/department/view-adverts', function () {
    return view('department/view-adverts/adverts');
});

Route::get('/department/view-applications', function () {
    return view('department/view-applications/applications');
});

Route::get('/department/view-applications/applicants', function () {
    return view('department/view-applications/applicants');
});

Route::get('/department/programmes', function () {
    return view('department/programmes/programmes');
});

Route::get('/department/programmes/programme', function () {
    return view('department/programmes/programme');
});

Route::get('/department/rec-letters', function () {
    return view('department/rec-letters/rec-letters');
});

Route::get('/department/rec-letters/send-rec-letters', function () {
    return view('department/rec-letters/send-rec-letters');
});



Route::resource('advert', AdvertController::class);
Route::resource('departments',DepartmentController::class);