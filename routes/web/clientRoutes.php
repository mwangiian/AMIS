<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdvertController;
use App\Http\Controllers\DepartmentController;

Route::get('/profile', function () {
    return view('client/profile/profile');
});

Route::get('/profile/edit-profile', function () {
    return view('client/profile/edit-profile');
});

Route::get('/profile/bio-data', function () {
    return view('client/bio-data/bio-data');
});

Route::get('/profile/edit-bio-data', function () {
    return view('client/bio-data/edit-bio');
});

Route::get('/applications', function () {
    return view('client/applications/index');
});

Route::get('/applications/letter', function () {
    return view('client/applications/letter');
});

Route::get('/applications/apply', function () {
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