<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;

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
 Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){
//Task 8
Route::get('home',[Controller::class,'showHome'])->name('home');
Route::get('about',[Controller::class,'showAbout'])->name('about');
Route::get('guard',[Controller::class,'showGuard'])->name('guard');
Route::get('contact',[Controller::class,'showContact'])->name('contact');
Route::get('service',[Controller::class,'showService'])->name('service');

});