<?php

use App\Http\Controllers\BlogpageController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\PackagepageController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\User\UserdashboardController;
use App\Mail\ContactMe;
use Illuminate\Support\Facades\Mail;
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
Route::get('/blogs', [BlogpageController::class, 'index'])->name('blogpage');
Route::get('/blog/{id}', [BlogpageController::class, 'singleblog'])->name('singleblog');

Route::get('pay', [PaymentController::class, 'pay'])->name('pay')->middleware('auth');



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'user', 'middleware' => 'auth'], function () {
    Route::get('dashboard', [UserdashboardController::class, 'index'])->name('userdashboard');
});


Route::get('/contact',function(){
    return view('frontend.email.contact');

});

Route::post('/contact',function(){
    // return view('frontend.contact');
  $data =  request(['name','email','subject','message']);
//   return $data;
Mail::to('aminulislammd97@gmail.com')->send(new ContactMe($data));

return redirect()->back()->with('flash','Message Send successfULLY');

});

