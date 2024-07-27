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
Route::get('/e-liquids', [VapeController::class, 'eLiquids'])->name('e-liquids');
Route::get('/others', [VapeController::class, 'others'])->name('others');
Route::get('/terms-and-conditions', [VapeController::class, 'terms'])->name('terms');
Route::get('/legal-notice', [VapeController::class, 'legal'])->name('legal');
Route::get('/help', [VapeController::class, 'help'])->name('help');

Route::resource('products', VapeController::class);
Route::get('/add-product-images', [VapeController::class, 'addProductImages'])->name('products.addProductsImages');
Route::get('/product/{id}/{productName?}', [VapeController::class, 'addProductImages'])->name('products.addProductsImages');
Route::post('/save-product-images', [VapeController::class, 'saveProductImages'])->name('products.saveProductImages');
Route::post('/whatsapp-link', [VapeController::class, 'whatsappLink'])->name('whatsapp-link');

Auth::routes();

Route::middleware(['isAdmin'])->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('admin.home');
    Route::get('/product-list', [App\Http\Controllers\HomeController::class, 'productsList'])->name('admin.productList');
    Route::get('/site-statistics', [App\Http\Controllers\HomeController::class, 'siteStatistics'])->name('admin.siteStatistics');
    Route::get('/product-list-filter/{productCategory}', [App\Http\Controllers\HomeController::class, 'productsListFilter'])->name('admin.productsListFilter');
    Route::get('/users', [App\Http\Controllers\HomeController::class,'users'])->name('admin.users');
    Route::get('/users/make-admin/{id}', [App\Http\Controllers\HomeController::class,'makeAdmin'])->name('user.makeAdmin');
    Route::get('/users/revoke-admin/{id}', [App\Http\Controllers\HomeController::class,'revokeAdmin'])->name('user.revokeAdmin');
    Route::get('/edit-product-status/{id}', [App\Http\Controllers\HomeController::class, 'editProductStatus'])->name('admin.editProductStatus');
});