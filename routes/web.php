<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\TemplatesController;
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
Route::get('/products', [PageController::class, 'products'])->name('page.products');
Route::get('/products/{slug}', [PageController::class, 'productsSelected'])->name('page.products.selected');
Route::get('/contacts', [PageController::class, 'contacts'])->name('page.contacts');

Route::post('/templates/products', [TemplatesController::class, 'products']);
