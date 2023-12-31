<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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
    return view('home');
});

Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'homeIndex')->name('home.index');
    Route::get('dress', 'dressIndex')->name('dress.index');
    Route::get('dress/{slug}', 'dressShow')->name('dress.show');
    Route::get('games', 'gamesIndex')->name('games.index');
    Route::get('media', 'mediaIndex')->name('media.index');
    Route::get('venue', 'venueIndex')->name('venue.index');
});
