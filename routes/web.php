<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoveController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\StoryController;

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

Route::get('/', [IndexController::class, 'index'])->name('dashboard');
Route::get('/love', [LoveController::class, 'index'])->name('love');

Route::get('/story/masukin', [StoryController::class, 'input_story'])->name('story.input');
