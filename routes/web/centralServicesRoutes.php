<?php

use Illuminate\Support\Facades\Route;


//------------------Admin routes
Route::get('/', function(){
    return view('admin/dashboard');
});

//Adverts routes
Route::get('/adverts', function(){
    return view('admin/adverts/adverts');
});
Route::get('/adverts/advert', function(){
    return view('admin/adverts/advert');
});
Route::get('/adverts/edit-advert', function(){
    return view('admin/adverts/edit-advert');
});


//Department routes
Route::get('/departments', function(){
    return view('admin/departments/departments');
});
Route::get('/departments/department', function(){
    return view('admin/departments/department');
});


//letters routes
Route::get('/letters', function(){
    return view('admin/letters/letters');
});


//mail routes
Route::get('/mail', function(){
    return view('admin/mail/mail');
});

//profile routes
Route::get('/profile', function(){
    return view('admin/profile/admin-profile');
});
Route::get('/profile/edit-profile', function(){
    return view('admin/profile/edit-profile');
});

//programmes routes
Route::get('/programmes', function(){
    return view('admin/programmes/programmes');
});
Route::get('/programmes/programme', function(){
    return view('admin/programmes/programme');
});


//reports routes
Route::get('/reports', function(){
    return view('admin/reports/reports');
});


//users routes
Route::get('/users', function(){
    return view('admin/users/users');
});
Route::get('/users/user', function(){
    return view('admin/users/user');
});