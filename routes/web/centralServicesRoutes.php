<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdvertController;
use App\Http\Controllers\DepartmentController;


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

//Profile routes
Route::get('/admin/profile', function(){
    return view('admin/profile/admin-profile');
});

Route::get('/admin/mail', function(){
    return view('admin/profile/edit-profile');
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
