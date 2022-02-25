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

// Client Routes
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

<<<<<<< HEAD

//------------------Admin routes
Route::get('/admin', function(){
    return view('admin/dashboard');
});

//Adverts routes
Route::get('/admin/adverts', function(){
    return view('admin/adverts/adverts');
});
Route::get('/admin/adverts/advert', function(){
    return view('admin/adverts/advert');
});
Route::get('/admin/adverts/edit-advert', function(){
    return view('admin/adverts/edit-advert');
});


//Department routes
Route::get('/admin/departments', function(){
    return view('admin/departments/departments');
});
Route::get('/admin/departments/department', function(){
    return view('admin/departments/department');
});


//letters routes
Route::get('/admin/letters', function(){
    return view('admin/letters/letters');
});


//mail routes
Route::get('/admin/mail', function(){
    return view('admin/mail/mail');
});


//programmes routes
Route::get('/admin/programmes', function(){
    return view('admin/programmes/programmes');
});
Route::get('/admin/programmes/programme', function(){
    return view('admin/programmes/programme');
});


//reports routes
Route::get('/admin/reports', function(){
    return view('admin/reports/reports');
});


//users routes
Route::get('/admin/users', function(){
    return view('admin/users/users');
});
Route::get('/admin/users/user', function(){
    return view('admin/users/user');
});


=======
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



>>>>>>> aa049544bad0799b4d9ff1def8ccd8e7b7f702ab
Route::resource('advert', AdvertController::class);
Route::resource('departments',DepartmentController::class);