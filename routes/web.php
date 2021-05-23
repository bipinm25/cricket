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

// Route::get('/', function () {
//     return view('welcome');
// });

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', [App\Http\Controllers\TeamController::class, 'index'])->name('team');

Route::post('/saveteam', [App\Http\Controllers\TeamController::class, 'saveTeam'])->name('saveteam'); 

Route::post('/saveplayer', [App\Http\Controllers\PlayerController::class, 'savePlayer'])->name('saveplayer');


Route::get('/player/{team_id}', [App\Http\Controllers\PlayerController::class, 'player'])->name('player');

Route::get('/point', [App\Http\Controllers\PointController::class, 'index'])->name('point');

Route::get('/matches', [App\Http\Controllers\MatchController::class, 'index'])->name('matches');

Route::post('/savematch', [App\Http\Controllers\MatchController::class, 'saveMatch'])->name('savematch');

Route::post('/savepoints', [App\Http\Controllers\PointController::class, 'savePoints'])->name('savepoints');


