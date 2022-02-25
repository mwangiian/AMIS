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


//Routing 
Route::prefix('/user')->group(__DIR__.'/web/clientRoutes.php');

Route::prefix('/department')->group(__DIR__.'/web/departmentRoutes.php');

Route::prefix('/admin')->group(__DIR__.'/web/centralServicesRoutes.php');




Route::resource('advert', AdvertController::class);
Route::resource('departments',DepartmentController::class);