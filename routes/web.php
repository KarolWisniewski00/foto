<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\OfferController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\PriceController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [IndexController::class, 'index'])->name('index');
Route::get('/offer', [OfferController::class, 'index'])->name('offer');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::get('/create', [FormController::class, 'create'])->name('form.create');
Route::post('/store', [FormController::class, 'store'])->name('form.store');
Route::post('/store_form', [FormController::class, 'store_form'])->name('form.store_form');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::prefix('dashboard')->group(function () {
        Route::get('/', [OrderController::class, 'dashboard']);
        Route::prefix('order')->group(function () {
            Route::get('/', [OrderController::class, 'index'])->name('dashboard');
            Route::get('show/{order}', [OrderController::class, 'show'])->name('order.show');
            Route::get('download-zip/{order}', [OrderController::class, 'download'])->name('order.download.zip');
            Route::delete('delete/{order}', [OrderController::class, 'delete'])->name('order.delete');
        });

        Route::prefix('photo')->group(function () {
            Route::get('/', [PhotoController::class, 'index'])->name('photo');
            Route::get('/download/{photo}', [PhotoController::class, 'download'])->name('photo.download');
            Route::delete('/delete/{photo}', [PhotoController::class, 'delete'])->name('photo.delete');
            Route::get('/delete-all', [PhotoController::class, 'deleteAll'])->name('photo.delete.all');

        });
        Route::prefix('price')->group(function () {
            Route::get('/', [PriceController::class, 'index'])->name('price');
            Route::get('create-up', [PriceController::class, 'createUp'])->name('price.create.up');
            Route::get('create-down', [PriceController::class, 'createDown'])->name('price.create.down');
            Route::post('store-up', [PriceController::class, 'storeUp'])->name('price.store.up');
            Route::post('store-down', [PriceController::class, 'storeDown'])->name('price.store.down');
            Route::get('edit-up/{setting}', [PriceController::class, 'editUp'])->name('price.edit.up');
            Route::get('edit-down/{setting}', [PriceController::class, 'editDown'])->name('price.edit.down');
            Route::put('update-up/{setting}', [PriceController::class, 'updateUp'])->name('price.update.up');
            Route::put('update-down/{setting}', [PriceController::class, 'updateDown'])->name('price.update.down');
            Route::delete('delete/{setting}', [PriceController::class, 'delete'])->name('price.delete');
        });
    });
});
