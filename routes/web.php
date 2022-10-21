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
Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){ 
        Route::get('/', function () { return view('welcome'); })-> name('index');
        Route::get('/about', function () { return view('about'); })-> name('about');
        Route::get('/contact', function () { return view('contact'); })-> name('contact');

        Route::get('/services', [App\Http\Controllers\PricesController::class, 'index'])->name('services');
        Route::get('/events', [App\Http\Controllers\EventController::class, 'index'])->name('events');
        Route::get('/clients', [App\Http\Controllers\PricesController::class, 'clients'])->name('clients');
        Route::get('/portfolio', [App\Http\Controllers\PortfolioController::class, 'index'])->name('portfolio');
        Auth::routes();
    });



