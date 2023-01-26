<?php

use App\Http\Controllers\PageController;
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

Route::get('/', [PageController::class, 'main'])->name('page.main');
Route::get('/about', [PageController::class, 'about'])->name('page.about');
Route::get('/career', [PageController::class, 'career'])->name('page.career');
Route::get('/drugs', [PageController::class, 'drugs'])->name('page.drugs');
Route::get('/drugs/{slug}', [PageController::class, 'drugsSelected'])->name('page.drugs.selected');
Route::get('/contacts', [PageController::class, 'contacts'])->name('page.contacts');