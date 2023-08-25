<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlaneController;
use App\Http\Controllers\FactoryController;
use App\Http\Controllers\NationalController;
use App\Http\Controllers\TypeController;

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
// Route::get('/planes/{id}', [PlaneController::class, 'show']);
Route::resource('/factorys', FactoryController::class);
Route::resource('/types', TypeController::class);
Route::resource('/nationals', NationalController::class);


