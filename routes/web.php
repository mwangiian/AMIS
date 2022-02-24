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

Route::resource('advert', AdvertController::class);
Route::resource('departments',DepartmentController::class);