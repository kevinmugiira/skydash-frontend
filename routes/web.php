<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('master', [\App\Http\Controllers\MasterController::class, 'index']);
Route::get('dashboard', [\App\Http\Controllers\DashboardController::class, 'index']);
Route::get('login', [\App\Http\Controllers\LoginController::class, 'index']);
Route::get('register', [\App\Http\Controllers\RegisterController::class, 'index']);
Route::get('skydash-layout', [\App\Http\Controllers\MasterController::class, 'skydashLayout']);
Route::get('podcast-master-layout', [\App\Http\Controllers\MasterController::class, 'podcastMasterLayout']);
Route::get('home', [\App\Http\Controllers\HomeController::class, 'index']);
Route::get('about', [\App\Http\Controllers\AboutController::class, 'index']);
Route::get('contact', [\App\Http\Controllers\ContactController::class, 'index']);
