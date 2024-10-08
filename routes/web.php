<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\OfferController;
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
Route::delete('/delete/{photo}', [FormController::class, 'delete'])->name('photo.delete');
Route::get('/download/{photo}', [FormController::class, 'download'])->name('photo.download');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', [AdminController::class, 'group'])->name('dashboard');
    Route::get('/group', [AdminController::class, 'index'])->name('group');
});
