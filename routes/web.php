<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoveController;
use App\Http\Controllers\AlbumController;
use App\Http\Controllers\StoryController;
use App\Http\Controllers\DashboardController;

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

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/love', [LoveController::class, 'index'])->name('love');
Route::get('/love/masukin', [LoveController::class, 'input_love'])->name('love.input');
Route::post('/love/masukin', [LoveController::class, 'store_love'])->name('love.store');
Route::get('/album', [AlbumController::class, 'index'])->name('album');
Route::get('/album/masukin', [AlbumController::class, 'input_album'])->name('album.input');
Route::get('/story/masukin', [StoryController::class, 'input_story'])->name('story.input');
Route::post('/story/masukin', [StoryController::class, 'store_story'])->name('story.store');
Route::get('/story', [StoryController::class, 'index'])->name('story');
