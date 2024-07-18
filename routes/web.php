<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VapeController;

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


Route::get('/', [VapeController::class, 'index'])->name('landing');
Route::get('/disposables', [VapeController::class, 'disposables'])->name('disposables');
Route::get('/devices', [VapeController::class, 'devices'])->name('devices');
Route::get('/e-liquids', [VapeController::class,'eLiquids'])->name('e-liquids');
Route::get('/others', [VapeController::class, 'others'])->name('others');
Route::get('/terms-and-conditions', [VapeController::class, 'terms'])->name('terms');
Route::get('/legal-notice', [VapeController::class, 'legal'])->name('legal');
Route::get('/help', [VapeController::class, 'help'])->name('help');

Route::resource('products', VapeController::class);
Route::get('/add-product-images', [VapeController::class, 'addProductImages'])->name('products.addProductsImages');
Route::get('/product/{id}/{productName?}', [VapeController::class, 'addProductImages'])->name('products.addProductsImages');
Route::post('/save-product-images', [VapeController::class, 'saveProductImages'])->name('products.saveProductImages');
Route::post('/whatsapp-link', [VapeController::class,'whatsappLink'])->name('whatsapp-link');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('admin.home');
Route::get('/product-list', [App\Http\Controllers\HomeController::class, 'productsList'])->name('admin.productList');
Route::get('/site-statistics', [App\Http\Controllers\HomeController::class, 'siteStatistics'])->name('admin.siteStatistics');
