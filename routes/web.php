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
Route::get('/album', [AlbumController::class, 'index'])->name('album');
Route::get('/story/masukin', [StoryController::class, 'input_story'])->name('story.input');
Route::post('/story/masukin', [StoryController::class, 'store_story'])->name('story.store');