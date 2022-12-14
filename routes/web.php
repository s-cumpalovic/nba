<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TeamsController;
use App\Http\Controllers\PlayersController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CommentsController;
use App\Http\Controllers\NewsController;
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

Route::get('/',[TeamsController::class, 'index']);
Route::get('/teams/{id}', [TeamsController::class, 'show'])->name('team-route');

Route::get('/players/{id}', [PlayersController::class, 'show'])->name('player-route');


Route::get('/register', [RegisterController::class, 'create']);
Route::post('/register', [RegisterController::class, 'store']);
Route::get('/login/{id}/', [RegisterController::class, 'update'])->name('user-verification');

Route::get('/login', [LoginController::class, 'create']);
Route::post('/login', [LoginController::class, 'store']);
Route::get('/logout', [LoginController::class, 'destroy']);

Route::post('/teams/{id}/comments', [CommentsController::class, 'store'])->middleware('hate.words');

Route::get('/news', [NewsController::class, 'index']);
Route::get('/news/publish/', [NewsController::class, 'create']);
Route::get('/news/{id}', [NewsController::class, 'show'])->name('news-with-users');
Route::get('/news/teams/{team}', [NewsController::class, 'index'])->name('teams-index');
Route::post('/news', [NewsController::class, 'store']); 

