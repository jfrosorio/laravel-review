<?php

use App\Http\Controllers\PageController;
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

Route::get('/', [PageController::class, 'homepage'])->name('homepage');
Route::get('about-us', [PageController::class, 'aboutUs'])->name('about-us');
Route::get('contacts', [PageController::class, 'contacts'])->name('contacts');

Route::resource('cars', \App\Http\Controllers\CarController::class);
