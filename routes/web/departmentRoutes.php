<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdvertController;
use App\Http\Controllers\DepartmentController;

Route::get('/', function () {
    return view('department/dashboard');
});

Route::get('/new-advert', function () {
    return view('department/new-advert/new-advert');
});

Route::get('/view-adverts', function () {
    return view('department/view-adverts/adverts');
});

Route::get('/view-applications', function () {
    return view('department/view-applications/applications');
});

Route::get('/view-applications/applicants', function () {
    return view('department/view-applications/applicants');
});

Route::get('/programmes', function () {
    return view('department/programmes/programmes');
});

Route::get('/programmes/programme', function () {
    return view('department/programmes/programme');
});

Route::get('/rec-letters', function () {
    return view('department/rec-letters/rec-letters');
});

Route::get('/rec-letters/send-rec-letters', function () {
    return view('department/rec-letters/send-rec-letters');
});