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
    Route::get('media/{slug}', 'mediaShow')->name('media.show');
    Route::get('venue', 'venueIndex')->name('venue.index');
    Route::get('event', 'mediaEvent')->name('media.event');
});

//AWARDEES
Route::get('event/awardees', function() {
    return view('awardees/awardees');
})->name('event.awardees');

//aina
Route::get('event/awardees/aina', function() {
    return view('awardees/aina');
})->name('event.awardees.aina');

//ariel
Route::get('event/awardees/ariel', function() {
    return view('awardees/ariel');
})->name('event.awardees.ariel');

//carla
Route::get('event/awardees/carla', function() {
    return view('awardees/carla');
})->name('event.awardees.carla');

//othelo
Route::get('event/awardees/othelo', function() {
    return view('awardees/othelo');
})->name('event.awardees.othelo');

//perry
Route::get('event/awardees/perry', function() {
    return view('awardees/perry');
})->name('event.awardees.perry');

//rene
Route::get('event/awardees/rene', function() {
    return view('awardees/rene');
})->name('event.awardees.rene');

//reyes
Route::get('event/awardees/reyes', function() {
    return view('awardees/reyes');
})->name('event.awardees.reyes');

//rodel
Route::get('event/awardees/rodel', function() {
    return view('awardees/rodel');
})->name('event.awardees.rodel');

//rogelio
Route::get('event/awardees/rogelio', function() {
    return view('awardees/rogelio');
})->name('event.awardees.rogelio');

//ronnie
Route::get('event/awardees/ronnie', function() {
    return view('awardees/ronnie');
})->name('event.awardees.ronnie');

//sharry
Route::get('event/awardees/sharry', function() {
    return view('awardees/sharry');
})->name('event.awardees.sharry');

//shayne
Route::get('event/awardees/shayne', function() {
    return view('awardees/shayne');
})->name('event.awardees.shayne');


Route::get('event/candid', function() {
    return view('candid');
})->name('event.candid');


//RAFFLES
Route::get('event/raffles', function() {
    return view('raffles');
})->name('event.raffles');

Route::get('event/raffles/5k', function() {
    return view('event/raffles/5k');
})->name('event.raffles.5k');

Route::get('event/raffles/10k', function() {
    return view('event/raffles/10k');
})->name('event.raffles.10k');

Route::get('event/raffles/25k', function() {
    return view('event/raffles/25k');
})->name('event.raffles.25k');

Route::get('event/raffles/50k', function() {
    return view('event/raffles/50k');
})->name('event.raffles.50k');

Route::get('event/raffles/70k', function() {
    return view('event/raffles/70k');
})->name('event.raffles.70k');

Route::get('event/raffles/100k', function() {
    return view('event/raffles/100k');
})->name('event.raffles.100k');

Route::get('event/raffles/additionals', function() {
    return view('event/raffles/additionals');
})->name('event.raffles.additionals');


//GAMES
Route::get('event/games', function() {
    return view('event/games/games');
})->name('event.games');

//BINGO
Route::get('event/games/bingo', function() {
    return view('event/games/bingo');
})->name('event.games.bingo');

//indak ng lahi dance competition
Route::get('event/games/indak-ng-lahi-competition', function() {
    return view('event/games/indak-ng-lahi');
})->name('event.games.indak');

Route::get('event/games/indak-ng-lahi-competition/hokage', function() {
    return view('event/games/indak-ng-lahi/hokage');
})->name('event.games.hokage');

Route::get('event/games/indak-ng-lahi-competition/dynamic', function() {
    return view('event/games/indak-ng-lahi/dynamic');
})->name('event.games.dynamic');

Route::get('event/games/indak-ng-lahi-competition/groove', function() {
    return view('event/games/indak-ng-lahi/groove');
})->name('event.games.groove');

Route::get('event/games/indak-ng-lahi-competition/sining', function() {
    return view('event/games/indak-ng-lahi/sining');
})->name('event.games.sining');

Route::get('event/games/indak-ng-lahi-competition/bhg', function() {
    return view('event/games/indak-ng-lahi/bhg');
})->name('event.games.bhg');

//maria clara
Route::get('event/games/maria-clara-at-ibarra', function() {
    return view('event/games/maria-clara-at-ibarra');
})->name('event.games.maria');

//pagsusulit
Route::get('event/games/pagsusulit', function() {
    return view('event/games/pagsusulit');
})->name('event.games.pagsusulit');

//silya elektrika
Route::get('event/games/silya-elektrika', function() {
    return view('event/games/silya-elektrika');
})->name('event.games.silya');