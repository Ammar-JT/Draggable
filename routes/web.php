<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;


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


Route::get('/', [Controllers\PagesController::class, 'index'])->name('pages.index');

Route::resource('menus', Controllers\MenusController::class);
Route::resource('languages', Controllers\LanguagesController::class);

Route::post('/menus/reorder', [Controllers\MenusController::class, 'reorder'])->name('menus.reorder');
Route::post('/languages/reorder', [Controllers\LanguagesController::class, 'reorder'])->name('languages.reorder');

