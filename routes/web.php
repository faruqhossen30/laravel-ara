<?php

use App\Http\Controllers\HomepageController;
use App\Http\Controllers\PackagepageController;
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

Route::get('/', [HomepageController::class, 'index'])->name('homepage');
Route::get('/packages', [PackagepageController::class, 'index'])->name('packagepage');
Route::get('/package/{id}', [PackagepageController::class, 'singlePackage'])->name('singlepackage');



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

