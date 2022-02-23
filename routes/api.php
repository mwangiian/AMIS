<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\AdvertController;
use App\Http\Controllers\ApplicantController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix' => 'v1'], function () {
    Route::Resources([
        'departments'=>DepartmentController::class,
        'adverts'=>AdvertController::class,
        'applicants'=>ApplicantController::class
    
    ]);
    
});
