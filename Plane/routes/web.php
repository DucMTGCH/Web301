<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlaneController;
use App\Http\Controllers\FactoryController;
use App\Http\Controllers\NationalController;
use App\Http\Controllers\typePlaneController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/planes', PlaneController::class);
Route::resource('/factorys', FactoryController::class);
Route::resource('/typeplanes', typePlaneController::class);
Route::resource('/nationals', NationalController::class);
Route::get('/search', PlaneController::class . '@search');